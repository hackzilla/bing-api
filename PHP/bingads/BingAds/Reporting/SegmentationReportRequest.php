<?php

namespace BingAds\Reporting;

/**
 * Defines a segmentation report request, which shows the number of times that users-broken out by age group, gender, and geographical location-reach the different stages of the conversion funnel. You can use this report to get information about how users of different demographics or locations behave on your website from the time they click an ad until they reach the conversion goal. For example, you can use this report to determine which demographic goes further into the funnel, and which stages you need to improve to increase the chance that users of the other demographic groups will continue to the next stage.
 * @link http://msdn.microsoft.com/en-us/library/gg262846(v=msads.80).aspx SegmentationReportRequest Data Object
 */
final class SegmentationReportRequest extends ReportRequest
{
    /**
     * The type of aggregation to use to aggregate the report data. For example, you can aggregate the report data by day or month, or request a summary report. The Time element specifies the time period to use for the aggregation.
     * @var NonHourlyReportAggregation
     */
    public $Aggregation;

    /**
     * The list of columns to include in the report. The report will include the columns in the order that you specify them.
     * @var SegmentationReportColumn[]
     */
    public $Columns;

    /**
     * The filter information to use to filter the report data.
     * @var SegmentationReportFilter
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
