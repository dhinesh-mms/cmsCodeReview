<?php
/*
 * Oasys Digital Signage
 * 
 * 
 */


namespace Xibo\Event;

class PlaylistMaxNumberChangedEvent extends Event
{
    public static $NAME = 'playlist.max.item.number.change.event';
    /** @var int */
    private $newLimit;

    public function __construct(int $newLimit)
    {
        $this->newLimit = $newLimit;
    }

    public function getNewLimit(): int
    {
        return $this->newLimit;
    }
}
