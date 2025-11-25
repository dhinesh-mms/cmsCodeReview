<?php
/*
 * Oasys Digital Signage
 * 
 * 
 */
namespace Xibo\Event;

use Xibo\Entity\Widget;

/**
 * Widget Edit Event
 */
class SubPlaylistWidgetsEvent extends Event
{
    public static $NAME = 'widget.sub-playlist.widgets';

    /** @var \Xibo\Entity\Widget */
    protected $widget;

    /** @var Widget[] */
    private $widgets = [];

    /** @var int */
    private $tempId;

    /**
     * constructor.
     * @param \Xibo\Entity\Widget $widget
     * @param int|null $tempId
     */
    public function __construct(\Xibo\Entity\Widget $widget, ?int $tempId)
    {
        $this->widget = $widget;
        $this->tempId = $tempId ?? 0;
    }

    /**
     * @return \Xibo\Entity\Widget
     */
    public function getWidget(): Widget
    {
        return $this->widget;
    }

    /**
     * @return int
     */
    public function getTempId(): int
    {
        return $this->tempId;
    }

    /**
     * Get the duration
     * @return \Xibo\Entity\Widget[]
     */
    public function getWidgets(): array
    {
        return $this->widgets;
    }

    /**
     * @param Widget[] $widgets
     * @return $this
     */
    public function setWidgets(array $widgets): SubPlaylistWidgetsEvent
    {
        $this->widgets += $widgets;
        return $this;
    }
}
