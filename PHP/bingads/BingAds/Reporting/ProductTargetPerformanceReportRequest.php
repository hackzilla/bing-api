<?php

namespace BingAds\Reporting;

/**
 * Defines a product target performance report request that aggregates the performance data by product target for a specified time period. You can include details in the report such as clicks, conversion, and spend that you can use to identify product targets that are performing well, and those that are not.
 * @link http://msdn.microsoft.com/en-us/library/dn195846(v=msads.80).aspx ProductTargetPerformanceReportRequest Data Object
 */
final class ProductTargetPerformanceReportRequest extends ReportRequest
{
    /**
     * The type of aggregation to use to aggregate the report data. For example, you can aggregate the report data by day or month, or request a summary report. The default is Summary.
     * @var ReportAggregation
     */
    public $Aggregation;

    /**
     * The list of columns to include in the report. The report will include the columns in the order that you specify them.
     * @var ProductTargetPerformanceReportColumn[]
     */
    public $Columns;

    /**
     * The filter information to use to filter the report data.
     * @var ProductTargetPerformanceReportFilter
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
