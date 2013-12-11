<?php

namespace BingAds\Reporting;

/**
 * Defines the criteria to use to filter the traffic sources report data.
 * @link http://msdn.microsoft.com/en-us/library/gg262844(v=msads.80).aspx TrafficSourcesReportFilter Data Object
 */
final class TrafficSourcesReportFilter
{
    /**
     * The report will include data for only the specified goals. The list can contain a maximum of 300 identifiers.
     * @var long[]
     */
    public $GoalIds;
}
