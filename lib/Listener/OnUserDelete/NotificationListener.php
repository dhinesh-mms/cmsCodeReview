<?php
/**
 * Oasys Digital Signage
 */

namespace Xibo\Listener\OnUserDelete;

use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Xibo\Entity\User;
use Xibo\Event\UserDeleteEvent;
use Xibo\Factory\NotificationFactory;
use Xibo\Listener\ListenerLoggerTrait;

class NotificationListener implements OnUserDeleteInterface
{
    use ListenerLoggerTrait;

    /**
     * @var NotificationFactory
     */
    private $notificationFactory;

    public function __construct(NotificationFactory $notificationFactory)
    {
        $this->notificationFactory = $notificationFactory;
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
        // Delete any Notifications
        foreach ($this->notificationFactory->getByOwnerId($user->userId) as $notification) {
            $notification->delete();
        }
    }

    public function reassignAllTo(User $user, User $newUser, User $systemUser)
    {
        foreach ($this->notificationFactory->getByOwnerId($user->userId) as $notification) {
            $notification->load();
            $notification->userId = $newUser->userId;
            $notification->save();
        }
    }

    public function countChildren(User $user)
    {
        $notifications = $this->notificationFactory->getByOwnerId($user->userId);
        $this->getLogger()->debug(sprintf('Counted Children Notifications on User ID %d, there are %d', $user->userId, count($notifications)));

        return count($notifications);
    }
}
