<?php

namespace BingAds\Reporting;

/**
 * Defines an age and gender demographic report request, which shows the estimated performance of an ad group broken out by age and gender demographics. You can use the information to identify whether your ads are targeting the intended genders and age groups, and whether you need to adjust your ads accordingly.
 * @link http://msdn.microsoft.com/en-us/library/bb671917(v=msads.90).aspx AgeGenderDemographicReportRequest Data Object
 */
final class AgeGenderDemographicReportRequest extends ReportRequest
{
    /**
     * The type of aggregation to use for the report data. For example, you can aggregate the report data by day or month, or request a summary report. The Time element specifies the time period to use for the aggregation.
     * @var NonHourlyReportAggregation
     */
    public $Aggregation;

    /**
     * 
     * @var AgeGenderDemographicReportColumn[]
     */
    public $Columns;

    /**
     * The filter information to use to filter the report data.
     * @var AgeGenderDemographicReportFilter
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
