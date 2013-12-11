<?php

namespace BingAds\Reporting;

/**
 * Defines a geographical location report request, which shows the overall effectiveness and cost of running ads in the different geographical locations, for example countries and regions, states, and metropolitan areas for a specified time period. You may include details in the report, for example clicks and spend that you may use to identify geographical locations where you ads are performing well, and those areas where you may need to adjust your strategy. The report also identifies the physical location of the user and the intended geographical location of the user's search query, for example a user in Seattle searching for services in Portland.
 * @link http://msdn.microsoft.com/en-us/library/dn393955(v=msads.90).aspx GeographicalLocationReportRequest Data Object
 */
final class GeographicalLocationReportRequest extends ReportRequest
{
    /**
     * The type of aggregation to use to aggregate the report data. For example, you can aggregate the report data by day or week, or request a summary report. The Time element specifies the time period to use for the aggregation.
     * @var NonHourlyReportAggregation
     */
    public $Aggregation;

    /**
     * The list of columns to include in the report. The report will include the columns in the order that you specify them.
     * @var GeographicalLocationReportColumn[]
     */
    public $Columns;

    /**
     * The filter information to use to filter the report data.
     * @var GeographicalLocationReportFilter
     */
    public $Filter;

    /**
     * The scope of the report. Use this element to limit the report to include data for a combination of accounts, ad groups, and campaigns.
     * @var AccountThroughAdGroupReportScope
     */
    public $Scope;

    /**
     * The time period to use for the report. You can specify a custom date range or select a predefined date range (for example, Today, ThisWeek, or LastMonth).
     * @var ReportTime
     */
    public $Time;
}
