<?php
/*
 * Oasys Digital Signage
 * 
 * 
 */

namespace Xibo\Listener;

use Xibo\Event\SystemUserChangedEvent;
use Xibo\Storage\StorageServiceInterface;

class OnSystemUserChange
{
    /**
     * @var StorageServiceInterface
     */
    private $storageService;

    public function __construct(StorageServiceInterface $storageService)
    {
        $this->storageService = $storageService;
    }

    public function __invoke(SystemUserChangedEvent $event)
    {
        // Reassign Module files
        $this->storageService->update('UPDATE `media` SET userId = :userId WHERE userId = :oldUserId AND type = \'module\'', [
            'userId' => $event->getNewSystemUser()->userId,
            'oldUserId' => $event->getOldSystemUser()->userId
        ]);

        // Reassign Display specific Display Groups
        $this->storageService->update('UPDATE `displaygroup` SET userId = :userId WHERE userId = :oldUserId AND isDisplaySpecific = 1', [
            'userId' => $event->getNewSystemUser()->userId,
            'oldUserId' => $event->getOldSystemUser()->userId
        ]);

        // Reassign system dayparts
        $this->storageService->update('UPDATE `daypart` SET userId = :userId WHERE userId = :oldUserId AND (isCustom = 1 OR isAlways = 1)', [
            'userId' => $event->getNewSystemUser()->userId,
            'oldUserId' => $event->getOldSystemUser()->userId
        ]);
    }
}
