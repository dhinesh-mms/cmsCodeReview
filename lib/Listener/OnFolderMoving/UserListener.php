<?php
/*
 * Oasys Digital Signage
 * 
 * 
 */
namespace Xibo\Listener\OnFolderMoving;

use Xibo\Event\FolderMovingEvent;
use Xibo\Factory\UserFactory;
use Xibo\Storage\StorageServiceInterface;

class UserListener
{
    /**
     * @var UserFactory
     */
    private $userFactory;
    /**
     * @var StorageServiceInterface
     */
    private $store;

    public function __construct(UserFactory $userFactory, StorageServiceInterface $store)
    {
        $this->userFactory = $userFactory;
        $this->store = $store;
    }

    public function __invoke(FolderMovingEvent $event)
    {
        $folder = $event->getFolder();
        $newFolder = $event->getNewFolder();

        foreach ($this->userFactory->getByHomeFolderId($folder->getId()) as $user) {
            $this->store->update('UPDATE `user` SET homeFolderId = :newFolderId WHERE homeFolderId = :oldFolderId AND userId = :userId', [
                'newFolderId' => $newFolder->getId(),
                'oldFolderId' => $folder->getId(),
                'userId' => $user->getId()
            ]);
        }
    }
}
