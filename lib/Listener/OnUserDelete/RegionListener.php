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
use Xibo\Factory\RegionFactory;
use Xibo\Listener\ListenerLoggerTrait;

class RegionListener implements OnUserDeleteInterface
{
    use ListenerLoggerTrait;

    /**
     * @var RegionFactory
     */
    private $regionFactory;

    public function __construct(RegionFactory $regionFactory)
    {
        $this->regionFactory = $regionFactory;
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
        foreach ($this->regionFactory->getbyOwnerId($user->userId) as $region) {
            $region->delete();
        }
    }

    public function reassignAllTo(User $user, User $newUser, User $systemUser)
    {
        $regions = $this->regionFactory->getbyOwnerId($user->userId);

        $this->getLogger()->debug(sprintf('Counted Children Regions on User ID %d, there are %d', $user->userId, count($regions)));

        foreach ($regions as $region) {
            $region->setOwner($newUser->userId, true);
            $region->save([
                'validate' => false,
                'audit' => false,
                'notify' => false
            ]);
        }

        $this->getLogger()->debug(sprintf('Finished reassign Regions, there are %d children', $this->countChildren($user)));
    }

    public function countChildren(User $user)
    {
        $regions = $this->regionFactory->getbyOwnerId($user->userId);

        $this->getLogger()->debug(sprintf('Counted Children Regions on User ID %d, there are %d', $user->userId, count($regions)));

        return count($regions);
    }
}
