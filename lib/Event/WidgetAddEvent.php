<?php
/*
 * Oasys Digital Signage
 * 
 * 
 */

namespace Xibo\Event;

use Xibo\Entity\Module;
use Xibo\Entity\Widget;

/**
 * Widget Add
 * ----------
 * Call when a new non-file based widget is added to a Layout
 */
class WidgetAddEvent extends Event
{
    public static $NAME = 'widget.add';

    /** @var \Xibo\Entity\Module */
    protected $module;

    /** @var \Xibo\Entity\Widget */
    protected $widget;

    /**
     * WidgetEditEvent constructor.
     * @param \Xibo\Entity\Module $module
     * @param \Xibo\Entity\Widget $widget
     */
    public function __construct(Module $module, Widget $widget)
    {
        $this->module = $module;
        $this->widget = $widget;
    }

    /**
     * @return \Xibo\Entity\Module
     */
    public function getModule(): Module
    {
        return $this->module;
    }

    /**
     * @return \Xibo\Entity\Widget
     */
    public function getWidget(): Widget
    {
        return $this->widget;
    }
}
