<?php
/**
 * Oasys Digital Signage
 */

namespace Xibo\Event;

use Xibo\Entity\Layout;
use Xibo\Entity\Region;

/**
 * Event fired when a region is being added (before save)
 */
class RegionAddedEvent extends Event
{
    public static string $NAME = 'region.added.event';

    /** @var Layout */
    private Layout $layout;

    /** @var Region */
    private Region $region;

    public function __construct(Layout $layout, Region $region)
    {
        $this->layout = $layout;
        $this->region = $region;
    }

    public function getLayout(): Layout
    {
        return $this->layout;
    }

    public function getRegion(): Region
    {
        return $this->region;
    }
}
