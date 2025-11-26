<?php
/**
 * Oasys Digital Signage
 */

namespace Xibo\Event;

/**
 * Event used to get list of connector reports
 */
class ConnectorReportEvent extends Event
{
    public static $NAME = 'connector.report.event';

    /** @var array */
    private $reports = [];

    public function getReports()
    {
        return $this->reports;
    }

    public function addReports($reports)
    {
        $this->reports = array_merge_recursive($this->reports, $reports);

        return $this;
    }
}
