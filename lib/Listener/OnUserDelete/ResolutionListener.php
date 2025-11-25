<?php
/*
 * Oasys Digital Signage
 * 
 * 
 */

namespace Xibo\Listener\OnUserDelete;

use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Xibo\Entity\User;
use Xibo\Event\UserDeleteEvent;
use Xibo\Factory\ResolutionFactory;
use Xibo\Listener\ListenerLoggerTrait;
use Xibo\Storage\StorageServiceInterface;

class ResolutionListener implements OnUserDeleteInterface
{
    use ListenerLoggerTrait;

    /**
     * @var StorageServiceInterface
     */
    private $store;
    /**
     * @var ResolutionFactory
     */
    private $resolutionFactory;

    public function __construct(StorageServiceInterface $store, ResolutionFactory $resolutionFactory)
    {
        $this->store = $store;
        $this->resolutionFactory = $resolutionFactory;
    }

    public function __invoke(UserDeleteEvent $event, $eventName, EventDispatcherInterface $dispatcher)
    {
        $user = $event->getUser();
        $function = $event->getFunction();
        $newUser = $event->getNewUser();
        $systemUser = $event->getSystemUser();

        if ($function === 'delete') {
            $this->deleteChildren($user, $dispatcher, $systemUser);
        } elseif ($function === 'reassignAll') {
            $this->reassignAllTo($user, $newUser, $systemUser);
        } elseif ($function === 'countChildren') {
            $event->setReturnValue($event->getReturnValue() + $this->countChildren($user));
        }
    }

    /* @inheritDoc */
    public function deleteChildren(User $user, EventDispatcherInterface $dispatcher, User $systemUser)
    {
        // Delete any Resolutions
        foreach ($this->resolutionFactory->getByOwnerId($user->userId) as $resolution) {
            $resolution->delete();
        }
    }

    /* @inheritDoc */
    public function reassignAllTo(User $user, User $newUser, User $systemUser)
    {
        // Reassign Resolutions
        $this->store->update('UPDATE `resolution` SET userId = :userId WHERE userId = :oldUserId', [
            'userId' => $newUser->userId,
            'oldUserId' => $user->userId
        ]);
    }

    /* @inheritDoc */
    public function countChildren(User $user)
    {
        $resolutions = $this->resolutionFactory->getByOwnerId($user->userId);
        $this->getLogger()->debug(sprintf('Counted Children Resolution on User ID %d, there are %d', $user->userId, count($resolutions)));

        return count($resolutions);
    }
}
