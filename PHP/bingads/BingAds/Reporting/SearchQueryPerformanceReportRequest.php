<?php

namespace BingAds\Reporting;

/**
 * Defines a search query performance report request that aggregates the performance data by search query.
 * @link http://msdn.microsoft.com/en-us/library/ee703962(v=msads.80).aspx SearchQueryPerformanceReportRequest Data Object
 */
final class SearchQueryPerformanceReportRequest extends ReportRequest
{
    /**
     * The type of aggregation to use to aggregate the report data. For example, you can aggregate the report data by day or month, or request a summary report. The Time element specifies the time period to use for the aggregation.
     * @var SearchQueryReportAggregation
     */
    public $Aggregation;

    /**
     * The list of columns to include in the report. The report will include the columns in the order that you specify them.
     * @var SearchQueryPerformanceReportColumn[]
     */
    public $Columns;

    /**
     * The filter information to use to filter the report data.
     * @var SearchQueryPerformanceReportFilter
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
