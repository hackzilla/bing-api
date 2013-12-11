<?php

namespace BingAds\Reporting;

/**
 * Defines a traffic sources report request, which shows the number of times that users reach the different stages of a conversion funnel, broken out by publisher website. You can use this report to get information about which website generates the most revenue for each account.
 * @link http://msdn.microsoft.com/en-us/library/gg262853(v=msads.80).aspx TrafficSourcesReportRequest Data Object
 */
final class TrafficSourcesReportRequest extends ReportRequest
{
    /**
     * The type of aggregation to use to aggregate the report data. For example, you can aggregate the report data by day or month, or request a summary report. The Time element specifies the time period to use for the aggregation.
     * @var NonHourlyReportAggregation
     */
    public $Aggregation;

    /**
     * The list of columns to include in the report. The report will include the columns in the order that you specify them.
     * @var TrafficSourcesReportColumn[]
     */
    public $Columns;

    /**
     * The filter information to use to filter the report data.
     * @var TrafficSourcesReportFilter
     */
    public $Filter;

    /**
     * The scope of the report. For example, you can limit the report to include data for a combination of accounts, ad groups, and campaigns.
     * @var AccountReportScope
     */
    public $Scope;

    /**
     * The time period to use for the report. You can specify a custom date range or select a predefined date range (for example, Today, ThisWeek, or LastMonth).
     * @var ReportTime
     */
    public $Time;
}
