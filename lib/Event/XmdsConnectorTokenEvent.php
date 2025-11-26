<?php
/**
 * Oasys Digital Signage
 */


namespace Xibo\Event;

/**
 * Event used to generate a token for an XMDS request.
 */
class XmdsConnectorTokenEvent extends Event
{
    public static $NAME = 'connector.xmds.token.event';
    private $displayId;
    private $widgetId;
    private $ttl;
    private $token;

    public function setTargets(int $displayId, int $widgetId): XmdsConnectorTokenEvent
    {
        $this->displayId = $displayId;
        $this->widgetId = $widgetId;
        return $this;
    }

    public function getDisplayId(): int
    {
        return $this->displayId;
    }

    public function getWidgetId(): ?int
    {
        return $this->widgetId;
    }

    public function setTtl(int $ttl): XmdsConnectorTokenEvent
    {
        $this->ttl = $ttl;
        return $this;
    }

    public function getTtl(): int
    {
        return $this->ttl;
    }

    public function setToken(string $token): XmdsConnectorTokenEvent
    {
        $this->token = $token;
        return $this;
    }

    public function getToken(): ?string
    {
        return $this->token;
    }
}
