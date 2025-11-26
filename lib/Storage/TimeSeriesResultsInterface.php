<?php
/**
 * Oasys Digital Signage
 */

namespace Xibo\Storage;

/**
 * Interface TimeSeriesResultsInterface
 * @package Xibo\Service
 */
interface TimeSeriesResultsInterface
{
    /**
     * Time series results constructor
     * @param null $object
     */
    public function __construct($object = null);

    /**
     * Get statistics array
     * @return array
     */
    public function getArray();

    /**
     * Get next row
     * @return array|false
     */
    public function getNextRow();

    /**
     * Get total number of stats
     * @return integer
     */
    public function getTotalCount();

    /**
     * @param $row
     * @return string|int
     */
    public function getIdFromRow($row);

    /**
     * @param $row
     * @param bool $decoded Should the engagements be decoded or strings?
     * @return array
     */
    public function getEngagementsFromRow($row, $decoded = true);

    /**
     * @param $row
     * @return array
     */
    public function getTagFilterFromRow($row);

    /**
     * @param string $value
     * @return \Carbon\Carbon
     */
    public function getDateFromValue($value);

}