<?php
/**
 * Oasys Digital Signage
 */

namespace Xibo\Report;

use Carbon\Carbon;

/**
 * Trait PeriodTrait
 * @package Xibo\Report
 */
trait PeriodTrait
{
    public function generateHourPeriods($filterRangeStart, $filterRangeEnd, $start, $end, $ranges)
    {

        $periodData = []; // to generate periods table

        // Generate all hours of the period
        foreach ($ranges as $range) {
            $startHour = $start->addHour()->format('U');

            // Remove the period which crossed the end range
            if ($startHour >= $filterRangeEnd) {
                continue;
            }

            // Period start
            $periodData[$range]['start'] = $startHour;
            if ($periodData[$range]['start'] < $filterRangeStart) {
                $periodData[$range]['start'] = $filterRangeStart;
            }

            // Period end
            $periodData[$range]['end'] = $end->addHour()->format('U');
            if ($periodData[$range]['end'] > $filterRangeEnd) {
                $periodData[$range]['end'] = $filterRangeEnd;
            }

            $hourofday = Carbon::createFromTimestamp($periodData[$range]['start'])->hour;

            // groupbycol =  hour
            $periodData[$range]['groupbycol'] = $hourofday;
        }

        return $periodData;
    }

    public function generateDayPeriods($filterRangeStart, $filterRangeEnd, $start, $end, $ranges, $groupByFilter = null)
    {
        $periodData = []; // to generate periods table

        // Generate all days of the period
        foreach ($ranges as $range) {
            $startDay = $start->addDay()->format('U');

            // Remove the period which crossed the end range
            if ($startDay >= $filterRangeEnd) {
                continue;
            }
            // Period start
            $periodData[$range]['start'] = $startDay;
            if ($periodData[$range]['start'] < $filterRangeStart) {
                $periodData[$range]['start'] = $filterRangeStart;
            }

            // Period end
            $periodData[$range]['end'] = $end->addDay()->format('U');
            if ($periodData[$range]['end'] > $filterRangeEnd) {
                $periodData[$range]['end'] = $filterRangeEnd;
            }

            if ($groupByFilter == 'bydayofweek') {
                $groupbycol = Carbon::createFromTimestamp($periodData[$range]['start'])->dayOfWeekIso;
            } else {
                $groupbycol =  Carbon::createFromTimestamp($periodData[$range]['start'])->day;
            }

            // groupbycol =  dayofweek
            $periodData[$range]['groupbycol'] = $groupbycol;
        }
        return $periodData;
    }
}
