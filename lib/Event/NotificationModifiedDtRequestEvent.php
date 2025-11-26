<?php
/**
 * Oasys Digital Signage
 */

namespace Xibo\Event;

use Carbon\Carbon;

/**
 * Request for the latest released notification.
 */
class NotificationModifiedDtRequestEvent extends Event
{
    public static $NAME = 'notification.modifiedDt.request.event';

    /** @var int displayId */
    private $displayId;

    /** @var Carbon */
    private $modifiedDt;

    public function __construct(int $displayId)
    {
        $this->displayId = $displayId;
    }

    public function getDisplayId(): int
    {
        return $this->displayId;
    }

    public function setModifiedDt(Carbon $modifiedDt): NotificationModifiedDtRequestEvent
    {
        $this->modifiedDt = $modifiedDt;
        return $this;
    }

    public function getModifiedDt(): ?Carbon
    {
        return $this->modifiedDt;
    }
}
