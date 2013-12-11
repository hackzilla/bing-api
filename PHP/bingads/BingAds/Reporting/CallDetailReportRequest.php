<?php

namespace BingAds\Reporting;

/**
 * Defines a call detail report request. There is one row or record in the report for each call made to the tracked number. You can include details in the report such as call duration and phone spend.
 * @link http://msdn.microsoft.com/en-us/library/dn195845(v=msads.80).aspx CallDetailReportRequest Data Object
 */
final class CallDetailReportRequest extends ReportRequest
{
    /**
     * The type of aggregation to use to aggregate the report data. The Time element specifies the time period to use for the aggregation.
     * @var ReportAggregation
     */
    public $Aggregation;

    /**
     * The list of columns to include in the report. The report will include the columns in the order that you specify them.
     * @var CallDetailReportColumn[]
     */
    public $Columns;

    /**
     * The scope of the report. Use this element to limit the report to include data for specified accounts, campaigns, or ad groups.
     * @var AccountThroughAdGroupReportScope
     */
    public $Scope;

    /**
     * The time period to use for the report. You can specify a custom date range or select a predefined date range for example, Today, ThisWeek, or LastMonth.
     * @var ReportTime
     */
    public $Time;
}
