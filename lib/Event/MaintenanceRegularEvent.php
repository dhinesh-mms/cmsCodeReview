<?php
/*
 * Oasys Digital Signage
 * 
 * 
 */

namespace Xibo\Event;

class MaintenanceRegularEvent extends Event
{
    public static $NAME = 'maintenance.regular.event';
    use MaintenanceEventTrait;
}
