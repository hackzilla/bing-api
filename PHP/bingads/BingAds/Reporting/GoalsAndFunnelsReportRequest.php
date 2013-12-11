<?php

namespace BingAds\Reporting;

/**
 * Defines a conversion funnel report request, which shows the number of times that users reach the different stages of a conversion funnel. You can use this report to get information about how users behave on your website, from the time they click an ad until they reach the conversion goal. For example, you can use this report to determine at what stage users leave the funnel, so you can improve that stage to increase the chance that the user will continue to the next stage.
 * @link http://msdn.microsoft.com/en-us/library/gg262840(v=msads.90).aspx GoalsAndFunnelsReportRequest Data Object
 */
final class GoalsAndFunnelsReportRequest extends ReportRequest
{
    /**
     * The type of aggregation to use to aggregate the report data. For example, you can aggregate the report data by day or month, or request a summary report. The Time element specifies the time period to use for the aggregation.
     * @var NonHourlyReportAggregation
     */
    public $Aggregation;

    /**
     * The list of columns to include in the report. The report will include the columns in the order that you specify them.
     * @var GoalsAndFunnelsReportColumn[]
     */
    public $Columns;

    /**
     * The filter information to use to filter the report data.
     * @var GoalsAndFunnelsReportFilter
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
