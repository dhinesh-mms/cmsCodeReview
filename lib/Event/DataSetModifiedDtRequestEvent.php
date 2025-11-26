<?php
/**
 * Oasys Digital Signage
 */

namespace Xibo\Event;

use Carbon\Carbon;

/**
 * Event raised when a widget requests data.
 */
class DataSetModifiedDtRequestEvent extends Event
{
    public static $NAME = 'dataset.modifiedDt.request.event';

    /** @var int */
    private $dataSetId;

    /** @var Carbon */
    private $modifiedDt;

    public function __construct(int $dataSetId)
    {
        $this->dataSetId = $dataSetId;
    }

    public function getDataSetId(): int
    {
        return $this->dataSetId;
    }

    public function setModifiedDt(Carbon $modifiedDt): DataSetModifiedDtRequestEvent
    {
        $this->modifiedDt = $modifiedDt;
        return $this;
    }

    public function getModifiedDt(): ?Carbon
    {
        return $this->modifiedDt;
    }
}
