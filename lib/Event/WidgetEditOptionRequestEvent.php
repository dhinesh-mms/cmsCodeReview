<?php
/*
 * Oasys Digital Signage
 * 
 * 
 */


namespace Xibo\Event;

use Xibo\Entity\Widget;

/**
 * An event fired by a widget when presenting its properties
 * should be used by a connector to provide additional options to a dropdown
 */
class WidgetEditOptionRequestEvent extends Event
{
    public static $NAME = 'widget.edit.option.event';

    /** @var \Xibo\Entity\Widget  */
    private $widget;

    /** @var string  */
    private $propertyId;

    /** @var mixed  */
    private $propertyValue;

    /** @var array|null */
    private $options;

    public function __construct(Widget $widget, string $propertyId, $propertyValue)
    {
        $this->widget = $widget;
        $this->propertyId = $propertyId;
        $this->propertyValue = $propertyValue;
    }

    /**
     * @return \Xibo\Entity\Widget|null
     */
    public function getWidget(): ?Widget
    {
        return $this->widget;
    }

    /**
     * Which property is making this request?
     * @return string|null The ID of the property `id=""`
     */
    public function getPropertyId(): ?string
    {
        return $this->propertyId;
    }

    /**
     * @return mixed
     */
    public function getPropertyValue()
    {
        return $this->propertyValue;
    }

    /**
     * Get the options array
     */
    public function getOptions(): array
    {
        if ($this->options === null) {
            $this->options = [];
        }

        return $this->options;
    }

    /**
     * Set a new options array
     * @return $this
     */
    public function setOptions(array $options): WidgetEditOptionRequestEvent
    {
        $this->options = $options;
        return $this;
    }
}
