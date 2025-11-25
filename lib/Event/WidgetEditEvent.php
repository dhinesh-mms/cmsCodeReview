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
class WidgetEditEvent extends Event
{
    public static $NAME = 'widget.edit';

    /** @var \Xibo\Entity\Widget */
    protected $widget;

    /**
     * constructor.
     * @param \Xibo\Entity\Widget $widget
     */
    public function __construct(\Xibo\Entity\Widget $widget)
    {
        $this->widget = $widget;
    }

    /**
     * @return \Xibo\Entity\Widget
     */
    public function getWidget(): Widget
    {
        return $this->widget;
    }
}
