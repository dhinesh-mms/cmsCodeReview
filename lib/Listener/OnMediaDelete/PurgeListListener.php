<?php
/**
 * Oasys Digital Signage
 */
namespace Xibo\Listener\OnMediaDelete;

use Carbon\Carbon;
use Xibo\Event\MediaDeleteEvent;
use Xibo\Helper\DateFormatHelper;
use Xibo\Listener\ListenerLoggerTrait;
use Xibo\Service\ConfigServiceInterface;
use Xibo\Storage\StorageServiceInterface;

class PurgeListListener
{
    use ListenerLoggerTrait;

    /**
     * @var StorageServiceInterface
     */
    private $store;
    /**
     * @var ConfigServiceInterface
     */
    private $configService;

    public function __construct(StorageServiceInterface $store, ConfigServiceInterface $configService)
    {
        $this->store = $store;
        $this->configService = $configService;
    }

    public function __invoke(MediaDeleteEvent $event)
    {
        // storedAs
        if ($event->isSetToPurge()) {
            $this->store->insert('INSERT INTO `purge_list` (mediaId, storedAs, expiryDate) VALUES (:mediaId, :storedAs, :expiryDate)', [
                'mediaId' => $event->getMedia()->mediaId,
                'storedAs' => $event->getMedia()->storedAs,
                'expiryDate' => Carbon::now()->addDays($this->configService->getSetting('DEFAULT_PURGE_LIST_TTL'))->format(DateFormatHelper::getSystemFormat())
            ]);
        }
    }
}
