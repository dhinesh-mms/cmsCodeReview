<?php
/*
 * Oasys Digital Signage
 * 
 * 
 */

namespace Xibo\Event;

use Xibo\Entity\Widget;

/**
 * Sub Playlist Validity Check
 */
class SubPlaylistValidityEvent extends Event
{
    public static $NAME = 'widget.sub-playlist.validity';

    /** @var \Xibo\Entity\Widget */
    protected $widget;

    private $isValid = true;

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

    /**
     * @param bool $isValid
     * @return $this
     */
    public function setIsValid(bool $isValid): SubPlaylistValidityEvent
    {
        $this->isValid = $isValid;
        return $this;
    }

    /**
     * @return bool true if valid
     */
    public function isValid(): bool
    {
        return $this->isValid;
    }
}
