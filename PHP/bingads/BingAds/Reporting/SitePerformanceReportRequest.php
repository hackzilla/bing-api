<?php

namespace BingAds\Reporting;

/**
 * Defines a website performance report request that aggregates the performance data by publisher website for a specified time period. If you bid on website placements, you can include details in the report-such as clicks, conversions, and spend-that you can use to identify website placements that are performing well and those that you may want to exclude from your campaign.
 * @link http://msdn.microsoft.com/en-us/library/dd797220(v=msads.80).aspx SitePerformanceReportRequest Data Object
 */
final class SitePerformanceReportRequest extends ReportRequest
{
    /**
     * The type of aggregation to use to aggregate the report data. For example, you can aggregate the report data by day or month, or request a summary report. The Time element specifies the time period to use for the aggregation.
     * @var ReportAggregation
     */
    public $Aggregation;

    /**
     * The list of columns to include in the report. The report will include the columns in the order that you specify them.
     * @var SitePerformanceReportColumn[]
     */
    public $Columns;

    /**
     * The filter information to use to filter the report data.
     * @var SitePerformanceReportFilter
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
