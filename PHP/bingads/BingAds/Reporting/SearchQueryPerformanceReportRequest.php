<?php

namespace BingAds\Reporting;

/**
 * Defines a search query performance report request that aggregates the performance data by search query.You can use this report to refine your list of keywords and negative keywords. For example, suppose that you are a mortgage lender who is running a campaign with the following keywords: mortgage, home mortgage, and home equity loans; and the report shows that the search query "mortgage rates" results in many impressions of your ad, you would probably add "rates" to your keyword list. However, if you do not provide reverse mortgages and the report shows that the search query "reverse mortgage" results in many impressions, you would probably add "reverse mortgage" to your negative keywords list.
 * @link http://msdn.microsoft.com/en-us/library/ee703962(v=msads.90).aspx SearchQueryPerformanceReportRequest Data Object
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
