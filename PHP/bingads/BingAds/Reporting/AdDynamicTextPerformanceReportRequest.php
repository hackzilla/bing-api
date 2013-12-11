<?php

namespace BingAds\Reporting;

/**
 * Defines an ad dynamic text performance report request that aggregates the performance data by ad for a specified time period. The data is broken out by ad title and destination URL. If you used parameter substitution strings in the ad title, you can use this report to identify the dynamic text strings that are performing well based on metrics (such as clicks, conversions, and spend), as well as those that you should consider changing.
 * @link http://msdn.microsoft.com/en-us/library/bb671950(v=msads.80).aspx AdDynamicTextPerformanceReportRequest Data Object
 */
final class AdDynamicTextPerformanceReportRequest extends ReportRequest
{
    /**
     * The type of aggregation to use for the report data. For example, you can aggregate the report data by day or month, or request a summary report. The Time element specifies the time period to use for the aggregation.
     * @var NonHourlyReportAggregation
     */
    public $Aggregation;

    /**
     * The list of columns to include in the report. The report will include the columns in the order that you specify them.
     * @var AdDynamicTextPerformanceReportColumn[]
     */
    public $Columns;

    /**
     * The filter information to use to filter the report data.
     * @var AdDynamicTextPerformanceReportFilter
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
