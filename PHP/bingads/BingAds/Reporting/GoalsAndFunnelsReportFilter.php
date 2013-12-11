<?php

namespace BingAds\Reporting;

/**
 * Defines the criteria to use to filter the goals and funnels report data.
 * @link http://msdn.microsoft.com/en-us/library/gg262854(v=msads.80).aspx GoalsAndFunnelsReportFilter Data Object
 */
final class GoalsAndFunnelsReportFilter
{
    /**
     * The report will include data for only the specified goals. The list can contain a maximum of 300 identifiers.
     * @var long[]
     */
    public $GoalIds;
}
