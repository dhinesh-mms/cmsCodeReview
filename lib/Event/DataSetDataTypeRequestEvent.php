<?php
/**
 * Oasys Digital Signage
 */

namespace Xibo\Event;

use Xibo\Widget\Definition\DataType;

/**
 * Event raised when a data set widget requests its datatype.
 */
class DataSetDataTypeRequestEvent extends Event
{
    public static $NAME = 'dataset.datatype.request.event';

    /** @var int */
    private $dataSetId;

    /** @var \Xibo\Widget\Definition\DataType */
    private $dataType;

    public function __construct(int $dataSetId)
    {
        $this->dataSetId = $dataSetId;
    }

    /**
     * The data provider should be updated with data for its widget.
     * @return int
     */
    public function getDataSetId(): int
    {
        return $this->dataSetId;
    }

    /**
     * @param \Xibo\Widget\Definition\DataType $dataType
     * @return $this
     */
    public function setDataType(DataType $dataType): DataSetDataTypeRequestEvent
    {
        $this->dataType = $dataType;
        return $this;
    }

    /**
     * Return the data type
     * @return \Xibo\Widget\Definition\DataType
     */
    public function getDataType(): ?DataType
    {
        return $this->dataType;
    }
}
