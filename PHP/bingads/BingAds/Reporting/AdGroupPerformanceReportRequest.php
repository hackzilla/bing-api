<?php

namespace BingAds\Reporting;

/**
 * Defines an ad group performance report request that aggregates the performance data by ad group for a specified time period. You can include details in the report (such as clicks, conversion, and spend) that you can use to identify ad groups that are performing well, and those that may need to be adjusted to optimize the monthly budget.
 * @link http://msdn.microsoft.com/en-us/library/bb671686(v=msads.90).aspx AdGroupPerformanceReportRequest Data Object
 */
final class AdGroupPerformanceReportRequest extends ReportRequest
{
    /**
     * The type of aggregation to use for the report data. For example, you can aggregate the report data by day or month, or request a summary report. The Time element specifies the time period to use for the aggregation.
     * @var ReportAggregation
     */
    public $Aggregation;

    /**
     * The list of columns to include in the report. The report will include the columns in the order that you specify them.
     * @var AdGroupPerformanceReportColumn[]
     */
    public $Columns;

    /**
     * The filter information to use to filter the report data.
     * @var AdGroupPerformanceReportFilter
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
