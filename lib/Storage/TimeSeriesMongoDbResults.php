<?php
/**
 * Oasys Digital Signage
 */

namespace Xibo\Storage;

use Carbon\Carbon;

/**
 * Class TimeSeriesMongoDbResults
 * @package Xibo\Storage
 */
class TimeSeriesMongoDbResults implements TimeSeriesResultsInterface
{
    /**
     * Statement
     * @var \MongoDB\Driver\Cursor
     */
    private $object;

    /**
     * Total number of stats
     */
    public $totalCount;

    /**
     * Iterator
     * @var \IteratorIterator
     */
    private $iterator;

    /**
     * @inheritdoc
     */
    public function __construct($cursor = null)
    {
        $this->object = $cursor;
    }

    /** @inheritdoc */
    public function getArray()
    {
        $this->object->setTypeMap(['root' => 'array']);
        return $this->object->toArray();
    }

    /** @inheritDoc */
    public function getIdFromRow($row)
    {
        return (string)$row['id'];
    }

    /** @inheritDoc */
    public function getDateFromValue($value)
    {
        return Carbon::instance($value->toDateTime());
    }

    /** @inheritDoc */
    public function getEngagementsFromRow($row, $decoded = true)
    {
        if ($decoded) {
            return $row['engagements'] ?? [];
        } else {
            return isset($row['engagements']) ? json_encode($row['engagements']) : '[]';
        }
    }

    /** @inheritDoc */
    public function getTagFilterFromRow($row)
    {
        return $row['tagFilter'] ?? [
                'dg' => [],
                'layout' => [],
                'media' => []
            ];
    }

    /**
     * Gets an iterator for this result set
     * @return \IteratorIterator
     */
    private function getIterator()
    {
        if ($this->iterator == null) {
            $this->iterator = new \IteratorIterator($this->object);
            $this->iterator->rewind();
        }

        return $this->iterator;
    }

    /** @inheritdoc */
    public function getNextRow()
    {

        $this->getIterator();

        if ($this->iterator->valid()) {

            $document = $this->iterator->current();
            $this->iterator->next();

            return  (array) $document;
        }

        return false;

    }

    /** @inheritdoc */
    public function getTotalCount()
    {
        return $this->totalCount;
    }
}