<?php
/**
 * Oasys Digital Signage
 */
namespace Xibo\Listener;

use Xibo\Event\PlaylistMaxNumberChangedEvent;
use Xibo\Storage\StorageServiceInterface;

class OnPlaylistMaxNumberChange
{
    /**
     * @var StorageServiceInterface
     */
    private $storageService;

    public function __construct(StorageServiceInterface $storageService)
    {
        $this->storageService = $storageService;
    }

    public function __invoke(PlaylistMaxNumberChangedEvent $event)
    {
        $this->storageService->update('UPDATE `playlist` SET maxNumberOfItems = :newLimit WHERE isDynamic = 1 AND maxNumberOfItems > :newLimit', [
            'newLimit' => $event->getNewLimit()
        ]);
    }
}
