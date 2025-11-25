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
use Xibo\Factory\SavedReportFactory;
use Xibo\Listener\ListenerLoggerTrait;
use Xibo\Storage\StorageServiceInterface;

class SavedReportListener implements OnUserDeleteInterface
{
    use ListenerLoggerTrait;

    /**
     * @var StorageServiceInterface
     */
    private $store;
    /**
     * @var SavedReportFactory
     */
    private $savedReportFactory;

    public function __construct(StorageServiceInterface $store, SavedReportFactory $savedReportFactory)
    {
        $this->store = $store;
        $this->savedReportFactory = $savedReportFactory;
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
        foreach ($this->savedReportFactory->getByOwnerId($user->userId) as $savedReport) {
            $savedReport->delete();
        }
    }

    public function reassignAllTo(User $user, User $newUser, User $systemUser)
    {
        $this->store->update('UPDATE `saved_report` SET userId = :userId WHERE userId = :oldUserId', [
            'userId' => $newUser->userId,
            'oldUserId' => $user->userId
        ]);
    }

    public function countChildren(User $user)
    {
        $savedReports = $this->savedReportFactory->getByOwnerId($user->userId);
        $this->getLogger()->debug(sprintf('Counted Children Saved Report on User ID %d, there are %d', $user->userId, count($savedReports)));

        return count($savedReports);
    }
}
