<?php

namespace BingAds\Reporting;

/**
 * Defines a conversion performance report request that aggregates the conversion performance data at the ad group, campaign, or account level for a specified time period. You can use this report to determine whether campaign performance meets goals for sales and revenue by using the conversion and revenue data, and the return-on-ad spend metric (ROAS) to measure the return on your investment.
 * @link http://msdn.microsoft.com/en-us/library/gg262843(v=msads.90).aspx ConversionPerformanceReportRequest Data Object
 */
final class ConversionPerformanceReportRequest extends ReportRequest
{
    /**
     * The type of aggregation to use to aggregate the report data. For example, you can aggregate the report data by day or month, or request a summary report. The Time element specifies the time period to use for the aggregation.
     * @var NonHourlyReportAggregation
     */
    public $Aggregation;

    /**
     * The list of columns to include in the report. The report includes the columns in the order that you specify them.
     * @var ConversionPerformanceReportColumn[]
     */
    public $Columns;

    /**
     * The filter information to use to filter the report data.
     * @var ConversionPerformanceReportFilter
     */
    public $Filter;

    /**
     * The scope of the report. For example, you can limit the report to include data for a combination of accounts, ad groups, and campaigns.
     * @var AccountThroughAdGroupReportScope
     */
    public $Scope;

    /**
     * The time period to use for the report. You can specify a custom date range or select a predefined date range (for example, Today, ThisWeek, or LastMonth).
     * @var ReportTime
     */
    public $Time;
}
