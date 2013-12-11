<?php

namespace BingAds\Reporting;

/**
 * Defines a behavioral segment target report request.
 * @link http://msdn.microsoft.com/en-us/library/dd796935(v=msads.80).aspx BehavioralTargetReportRequest Data Object
 */
final class BehavioralTargetReportRequest extends ReportRequest
{
    /**
     * The type of aggregation to use for the report data. For example, you can aggregate the report data by day or month, or request a summary report. The Time element specifies the time period to use for the aggregation.
     * @var NonHourlyReportAggregation
     */
    public $Aggregation;

    /**
     * The list of columns to include in the report. The report will include the columns in the order that you specify them.
     * @var BehavioralTargetReportColumn[]
     */
    public $Columns;

    /**
     * The filter information to use to filter the report data.
     * @var BehavioralTargetReportFilter
     */
    public $Filter;

    /**
     * The scope of the report. Use this element to limit the report to include data for a combination of accounts, ad groups, and campaigns.
     * @var AccountThroughAdGroupReportScope
     */
    public $Scope;

    /**
     * The time period to use for the report. You can specify a custom data range or select a predefined date range (for example, Today, ThisWeek, or LastMonth).
     * @var ReportTime
     */
    public $Time;
}
