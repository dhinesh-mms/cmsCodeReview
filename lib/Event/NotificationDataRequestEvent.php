<?php
/**
 * Oasys Digital Signage
 */


namespace Xibo\Event;

use Xibo\Widget\Provider\DataProviderInterface;

class NotificationDataRequestEvent extends Event
{
    public static $NAME = 'notification.data.request.event';

    /** @var DataProviderInterface */
    private $dataProvider;

    public function __construct(DataProviderInterface $dataProvider)
    {
        $this->dataProvider = $dataProvider;
    }

    /**
     * The data provider should be updated with data for its Widget.
     * @return DataProviderInterface
     */
    public function getDataProvider(): DataProviderInterface
    {
        return $this->dataProvider;
    }
}
