<?php
/*
 * Oasys Digital Signage
 * 
 * 
 */

namespace Xibo\Event;

use Xibo\Entity\Widget;
use Xibo\Widget\SubPlaylistItem;

/**
 * Widget Edit Event
 */
class SubPlaylistItemsEvent extends Event
{
    public static $NAME = 'widget.sub-playlist.items';

    /** @var \Xibo\Entity\Widget */
    protected $widget;

    /** @var SubPlaylistItem[] */
    private $items = [];

    /**
     * constructor.
     * @param \Xibo\Entity\Widget $widget
     */
    public function __construct(\Xibo\Entity\Widget $widget)
    {
        $this->widget = $widget;
    }

    /**
     * @return Widget
     */
    public function getWidget(): Widget
    {
        return $this->widget;
    }

    /**
     * @return SubPlaylistItem[]
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param array $items
     * @return $this
     */
    public function setItems(array $items): SubPlaylistItemsEvent
    {
        $this->items += $items;
        return $this;
    }
}
