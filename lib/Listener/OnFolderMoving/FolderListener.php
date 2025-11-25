<?php
/*
 * Oasys Digital Signage
 * 
 * 
 */
namespace Xibo\Listener\OnFolderMoving;

use Xibo\Event\FolderMovingEvent;
use Xibo\Factory\FolderFactory;

class FolderListener
{
    /**
     * @var FolderFactory
     */
    private $folderFactory;

    public function __construct(FolderFactory $folderFactory)
    {
        $this->folderFactory = $folderFactory;
    }

    public function __invoke(FolderMovingEvent $event)
    {
        $merge = $event->getIsMerge();

        if ($merge) {
            $folder = $event->getFolder();
            $newFolder = $event->getNewFolder();

            // on merge we delete the original Folder and move its content to the new selected folder
            // sub-folders are moved to their new parent as well
            foreach (array_filter(explode(',', $folder->children)) as $childFolderId) {
                $childFolder = $this->folderFactory->getById($childFolderId, 0);
                $childFolder->updateFoldersAfterMove($folder->getId(), $newFolder->getId());
            }
        }
    }
}
