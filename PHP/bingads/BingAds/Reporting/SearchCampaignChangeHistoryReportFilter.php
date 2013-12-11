<?php

namespace BingAds\Reporting;

/**
 * Defines the criteria to use to filter the campaign change history report data.
 * @link http://msdn.microsoft.com/en-us/library/hh912356(v=msads.90).aspx SearchCampaignChangeHistoryReportFilter Data Object
 */
final class SearchCampaignChangeHistoryReportFilter
{
    /**
     * The report will include data for only the specified type of change. For example, you can use the filter to include data only for updates or deletions.
     * @var ChangeTypeReportFilter
     */
    public $HowChanged;

    /**
     * The report will include data for only the specified type of entity. For example, you can use the filter to include data only for changes to ad groups or campaigns.
     * @var ChangeEntityReportFilter
     */
    public $ItemChanged;
}
