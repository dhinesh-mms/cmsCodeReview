<?php
/**
 * Oasys Digital Signage
 */


namespace Xibo\Entity;

/**
 * Class ReportResult
 * @package Xibo\Entity
 *
 */
class ReportResult implements \JsonSerializable
{
    /**
     * Number of total records
     * @var int
     */
    public $recordsTotal;

    /**
     * Chart data points
     * @var array|null
     */
    public $chart;

    /**
     * Error message
     * @var null|string
     */
    public $error;

    /**
     * Metadata that is used in the report preview or in the email template
     * @var array
     */
    public $metadata;

    /**
     * Datatable Records
     * @var array
     */
    public $table;

    /**
     * ReportResult constructor.
     * @param array $metadata
     * @param array $table
     * @param int $recordsTotal
     * @param array $chart
     * @param null|string $error
     */
    public function __construct(
        array $metadata = [],
        array $table = [],
        int   $recordsTotal = 0,
        array $chart = [],
        string $error = null
    ) {
        $this->metadata = $metadata;
        $this->table = $table;
        $this->recordsTotal = $recordsTotal;
        $this->chart = $chart;
        $this->error = $error;

        return $this;
    }

    public function getMetaData(): array
    {
        return $this->metadata;
    }

    public function getRows(): array
    {
        return $this->table;
    }

    public function countLast(): int
    {
        return $this->recordsTotal;
    }

    public function jsonSerialize(): array
    {
        return [
            'metadata' => $this->metadata,
            'table' => $this->table,
            'recordsTotal' => $this->recordsTotal,
            'chart' => $this->chart,
            'error' => $this->error
        ];
    }
}
