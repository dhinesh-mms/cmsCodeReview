<?php
/*
 * Oasys Digital Signage
 * 
 * 
 */

namespace Xibo\Event;

class MaintenanceDailyEvent extends Event
{
    public static $NAME = 'maintenance.daily.event';
    use MaintenanceEventTrait;
}
