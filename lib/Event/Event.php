<?php
/*
 * Oasys Digital Signage
 * 
 * 
 */


namespace Xibo\Event;

/**
 * An event
 */
abstract class Event extends \Symfony\Component\EventDispatcher\Event
{
    private static $NAME = 'generic.event';

    /**
     * @return string
     */
    public function getName()
    {
        return $this::$NAME;
    }
}
