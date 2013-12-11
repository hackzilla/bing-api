<?php

namespace BingAds\Reporting;

/**
 * Defines a change history report request that identifies entities that have been added or deleted. In addition, the report shows the new and old values of entities whose values have been updated.
 * @link http://msdn.microsoft.com/en-us/library/hh912357(v=msads.90).aspx SearchCampaignChangeHistoryReportRequest Data Object
 */
final class SearchCampaignChangeHistoryReportRequest extends ReportRequest
{
    /**
     * The list of columns to include in the report. The report will include the columns in the order that you specify them.
     * @var SearchCampaignChangeHistoryReportColumn[]
     */
    public $Columns;

    /**
     * The filter information to use to filter the report data.
     * @var SearchCampaignChangeHistoryReportFilter
     */
    public $Filter;

    /**
     * The scope of the report. Use this element to limit the report to include data for a combination of accounts, ad groups, and campaigns.
     * @var AccountThroughAdGroupReportScope
     */
    public $Scope;

    /**
     * The time period to use for the report. You can specify a custom date range or select one of the following predefined date ranges.
     * @var ReportTime
     */
    public $Time;
}
