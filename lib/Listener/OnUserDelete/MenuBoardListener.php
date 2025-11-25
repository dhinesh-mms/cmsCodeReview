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
use Xibo\Factory\MenuBoardFactory;
use Xibo\Listener\ListenerLoggerTrait;
use Xibo\Storage\StorageServiceInterface;

class MenuBoardListener implements OnUserDeleteInterface
{
    use ListenerLoggerTrait;

    /**
     * @var StorageServiceInterface
     */
    private $storageService;
    /**
     * @var MenuBoardFactory
     */
    private $menuBoardFactory;

    public function __construct(StorageServiceInterface $storageService, MenuBoardFactory $menuBoardFactory)
    {
        $this->storageService = $storageService;
        $this->menuBoardFactory = $menuBoardFactory;
    }

    /**
     * @inheritDoc
     */
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

    /**
     * @inheritDoc
     */
    public function deleteChildren(User $user, EventDispatcherInterface $dispatcher, User $systemUser)
    {
        foreach ($this->menuBoardFactory->getByOwnerId($user->userId) as $menuBoard) {
            $menuBoard->delete();
        }
    }

    /**
     * @inheritDoc
     */
    public function reassignAllTo(User $user, User $newUser, User $systemUser)
    {
        // Reassign Menu Boards
        $this->storageService->update('UPDATE `menu_board` SET userId = :userId WHERE userId = :oldUserId', [
            'userId' => $newUser->userId,
            'oldUserId' => $user->userId
        ]);
    }

    /**
     * @inheritDoc
     */
    public function countChildren(User $user)
    {
        $menuBoards = $this->menuBoardFactory->getByOwnerId($user->userId);
        $count = count($menuBoards);
        $this->getLogger()->debug(sprintf('Counted Children Menu Board on User ID %d, there are %d', $user->userId, $count));

        return $count;
    }
}
