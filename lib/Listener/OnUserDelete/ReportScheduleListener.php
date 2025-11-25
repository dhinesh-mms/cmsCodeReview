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
use Xibo\Factory\ReportScheduleFactory;
use Xibo\Listener\ListenerLoggerTrait;
use Xibo\Storage\StorageServiceInterface;

class ReportScheduleListener implements OnUserDeleteInterface
{
    use ListenerLoggerTrait;

    /**
     * @var StorageServiceInterface
     */
    private $store;
    /**
     * @var ReportScheduleFactory
     */
    private $reportScheduleFactory;

    public function __construct(StorageServiceInterface $store, ReportScheduleFactory $reportScheduleFactory)
    {
        $this->store = $store;
        $this->reportScheduleFactory = $reportScheduleFactory;
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
        foreach ($this->reportScheduleFactory->getByOwnerId($user->userId) as $reportSchedule) {
            $reportSchedule->delete();
        }
    }

    public function reassignAllTo(User $user, User $newUser, User $systemUser)
    {
        $this->store->update('UPDATE `reportschedule` SET userId = :userId WHERE userId = :oldUserId', [
            'userId' => $newUser->userId,
            'oldUserId' => $user->userId
        ]);
    }

    public function countChildren(User $user)
    {
        $reportSchedules = $this->reportScheduleFactory->getByOwnerId($user->userId);
        $this->getLogger()->debug(sprintf('Counted Children Report Schedules on User ID %d, there are %d', $user->userId, count($reportSchedules)));

        return count($reportSchedules);
    }
}
