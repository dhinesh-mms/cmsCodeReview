<?php
/**
 * Oasys Digital Signage
 */

namespace Xibo\Event;

/**
 * Event used to get report results
 */
class ReportDataEvent extends Event
{
    public static $NAME = 'audience.report.data.event';

    private $type;

    private $params;

    private $results;

    /**
     * ReportDataEvent constructor.
     * @param $type
     */
    public function __construct($type)
    {
        $this->type = $type;
    }

    public function getReportType()
    {
        return $this->type;
    }

    public function getParams()
    {
        return $this->params;
    }

    public function setParams($params)
    {
        $this->params = $params;

        return $this;
    }

    public function getResults()
    {
        return $this->results;
    }

    public function setResults($results)
    {
        $this->results = $results;

        return $this;
    }
}
