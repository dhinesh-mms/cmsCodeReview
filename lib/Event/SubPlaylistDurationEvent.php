<?php
/**
 * Oasys Digital Signage
 */

namespace Xibo\Event;

use Xibo\Entity\Widget;

/**
 * Widget Edit Event
 */
class SubPlaylistDurationEvent extends Event
{
    public static $NAME = 'widget.sub-playlist.duration';

    /** @var \Xibo\Entity\Widget */
    protected $widget;

    /** @var int */
    private $duration;

    /**
     * constructor.
     * @param \Xibo\Entity\Widget $widget
     */
    public function __construct(\Xibo\Entity\Widget $widget)
    {
        $this->widget = $widget;
        $this->duration = 0;
    }

    /**
     * @return \Xibo\Entity\Widget
     */
    public function getWidget(): Widget
    {
        return $this->widget;
    }

    /**
     * Get the duration
     * @return int
     */
    public function getDuration(): int
    {
        return $this->duration;
    }

    /**
     * @param int $duration
     * @return $this
     */
    public function appendDuration(int $duration): SubPlaylistDurationEvent
    {
        $this->duration += $duration;
        return $this;
    }
}
