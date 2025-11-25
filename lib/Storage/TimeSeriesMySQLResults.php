<?php
/*
 * Oasys Digital Signage
 * 
 * 
 */

namespace Xibo\Storage;

use Carbon\Carbon;

/**
 * Class TimeSeriesMySQLResults
 * @package Xibo\Storage
 */
class TimeSeriesMySQLResults implements TimeSeriesResultsInterface
{
    /**
     * Statement
     * @var \PDOStatement
     */
    private $object;

    /**
     * Total number of stats
     */
    public $totalCount;

    /**
     * @inheritdoc
     */
    public function __construct($stmtObject = null)
    {
        $this->object = $stmtObject;
    }

    /**
     * @inheritdoc
     */
    public function getArray()
    {
        return $this->object->fetchAll(\PDO::FETCH_ASSOC);
    }

    /** @inheritDoc */
    public function getIdFromRow($row)
    {
        return $row['statId'];
    }

    /** @inheritDoc */
    public function getDateFromValue($value)
    {
        return Carbon::createFromTimestamp($value);
    }

    /** @inheritDoc */
    public function getEngagementsFromRow($row, $decoded = true)
    {
        if ($decoded) {
            return isset($row['engagements']) ? json_decode($row['engagements']) : [];
        } else {
            return $row['engagements'] ?? '[]';
        }
    }

    /** @inheritDoc */
    public function getTagFilterFromRow($row)
    {
        // Tags
        // Mimic the structure we have in Mongo.
        $entry['tagFilter'] = [
            'dg' => [],
            'layout' => [],
            'media' => []
        ];

        // Display Tags
        if (array_key_exists('displayTags', $row) && !empty($row['displayTags'])) {
            $tags = explode(',', $row['displayTags']);
            foreach ($tags as $tag) {
                $tag = explode('|', $tag);
                $value = $tag[1] ?? null;
                $entry['tagFilter']['dg'][] = [
                    'tag' => $tag[0],
                    'value' => ($value === 'null') ? null : $value
                ];
            }
        }

        // Layout Tags
        if (array_key_exists('layoutTags', $row) && !empty($row['layoutTags'])) {
            $tags = explode(',', $row['layoutTags']);
            foreach ($tags as $tag) {
                $tag = explode('|', $tag);
                $value = $tag[1] ?? null;
                $entry['tagFilter']['layout'][] = [
                    'tag' => $tag[0],
                    'value' => ($value === 'null') ? null : $value
                ];
            }
        }

        // Media Tags
        if (array_key_exists('mediaTags', $row) && !empty($row['mediaTags'])) {
            $tags = explode(',', $row['mediaTags']);
            foreach ($tags as $tag) {
                $tag = explode('|', $tag);
                $value = $tag[1] ?? null;
                $entry['tagFilter']['media'][] = [
                    'tag' => $tag[0],
                    'value' => ($value === 'null') ? null : $value
                ];
            }
        }
    }

    /**
     * @inheritdoc
     */
    public function getNextRow()
    {
        return $this->object->fetch(\PDO::FETCH_ASSOC);
    }

    /**
     * @inheritdoc
     */
    public function getTotalCount()
    {
        return $this->totalCount;
    }

}