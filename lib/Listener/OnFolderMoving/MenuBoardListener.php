<?php
/*
 * Oasys Digital Signage
 * 
 * 
 */
namespace Xibo\Listener\OnFolderMoving;

use Xibo\Event\FolderMovingEvent;
use Xibo\Factory\MenuBoardFactory;

class MenuBoardListener
{
    /**
     * @var MenuBoardFactory
     */
    private $menuBoardFactory;

    public function __construct(MenuBoardFactory $menuBoardFactory)
    {
        $this->menuBoardFactory = $menuBoardFactory;
    }

    public function __invoke(FolderMovingEvent $event)
    {
        $folder = $event->getFolder();
        $newFolder = $event->getNewFolder();

        foreach ($this->menuBoardFactory->getbyFolderId($folder->getId()) as $menuBoard) {
            $menuBoard->folderId = $newFolder->getId();
            $menuBoard->permissionsFolderId = $newFolder->getPermissionFolderIdOrThis();
            $menuBoard->updateFolders('menu_board');
        }
    }
}
