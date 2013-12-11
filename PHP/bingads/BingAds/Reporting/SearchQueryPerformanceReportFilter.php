<?php

namespace BingAds\Reporting;

/**
 * Defines the criteria to use to filter the search query performance report data.
 * @link http://msdn.microsoft.com/en-us/library/ee703961(v=msads.90).aspx SearchQueryPerformanceReportFilter Data Object
 */
final class SearchQueryPerformanceReportFilter
{
    /**
     * The report will include data for ads that have the specified status value. You can specify one or more status values.
     * @var AdStatusReportFilter
     */
    public $AdStatus;

    /**
     * The report will include data for only the specified ad types. For example, the report can include data for mobile or text ads. You can specify one or more ad types.
     * @var AdTypeReportFilter
     */
    public $AdType;

    /**
     * The report will include data for campaigns that have the specified status value. You can specify one or more status values.
     * @var CampaignStatusReportFilter
     */
    public $CampaignStatus;

    /**
     * The report will include data for only the specified delivered match types (as opposed to the bid match type). For example, you can use the filter to include data for ads that were delivered using the exact or phrase match type.
     * @var DeliveredMatchTypeReportFilter
     */
    public $DeliveredMatchType;

    /**
     * The report will include data for only websites that used the specified languages. For a list of possible values, see Ad Languages.
     * @var string[]
     */
    public $LanguageCode;

    /**
     * The report will include data for only the specified search query strings.
     * @var string[]
     */
    public $SearchQueries;
}
