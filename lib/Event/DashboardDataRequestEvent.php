<?php
/*
 * Oasys Digital Signage
 * 
 * 
 */


namespace Xibo\Event;

use Xibo\Widget\Provider\DataProviderInterface;

class DashboardDataRequestEvent extends Event
{
    public static $NAME = 'dashboard.data.request.event';

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
