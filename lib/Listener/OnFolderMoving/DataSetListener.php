<?php
/**
 * Oasys Digital Signage
 */
namespace Xibo\Listener\OnFolderMoving;

use Xibo\Event\FolderMovingEvent;
use Xibo\Factory\DataSetFactory;

class DataSetListener
{
    /**
     * @var DataSetFactory
     */
    private $dataSetFactory;

    public function __construct(DataSetFactory $dataSetFactory)
    {
        $this->dataSetFactory = $dataSetFactory;
    }

    public function __invoke(FolderMovingEvent $event)
    {
        $folder = $event->getFolder();
        $newFolder = $event->getNewFolder();

        foreach ($this->dataSetFactory->getByFolderId($folder->getId()) as $dataSet) {
            $dataSet->folderId = $newFolder->getId();
            $dataSet->permissionsFolderId = $newFolder->getPermissionFolderIdOrThis();
            $dataSet->updateFolders('dataset');
        }
    }
}
