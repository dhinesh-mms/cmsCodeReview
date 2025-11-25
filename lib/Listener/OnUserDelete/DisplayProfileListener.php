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
use Xibo\Factory\DisplayProfileFactory;
use Xibo\Listener\ListenerLoggerTrait;
use Xibo\Storage\StorageServiceInterface;

class DisplayProfileListener implements OnUserDeleteInterface
{
    use ListenerLoggerTrait;

    /**
     * @var StorageServiceInterface
     */
    private $store;
    /**
     * @var DisplayProfileFactory
     */
    private $displayProfileFactory;

    public function __construct(StorageServiceInterface $store, DisplayProfileFactory $displayProfileFactory)
    {
        $this->store = $store;
        $this->displayProfileFactory = $displayProfileFactory;
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

    public function deleteChildren(User $user, EventDispatcherInterface $dispatcher, User $systemUser)
    {
        // Delete any Display Profiles, reassign any default profiles to systemUser
        foreach ($this->displayProfileFactory->getByOwnerId($user->userId) as $displayProfile) {
            if ($displayProfile->isDefault === 1) {
                $displayProfile->setOwner($systemUser->userId);
                $displayProfile->save();
            } else {
                $displayProfile->delete();
            }
        }
    }

    public function reassignAllTo(User $user, User $newUser, User $systemUser)
    {
        $this->store->update('UPDATE `displayprofile` SET userId = :userId WHERE userId = :oldUserId', [
            'userId' => $newUser->userId,
            'oldUserId' => $user->userId
        ]);
    }

    public function countChildren(User $user)
    {
        $profiles = $this->displayProfileFactory->getByOwnerId($user->userId);
        $this->getLogger()->debug(sprintf('Counted Children Display Profiles on User ID %d, there are %d', $user->userId, count($profiles)));

        return count($profiles);
    }
}
