<?php

namespace BingAds\Reporting;

/**
 * Defines the criteria to use to filter the website performance report data.
 * @link http://msdn.microsoft.com/en-us/library/dd796955(v=msads.80).aspx SitePerformanceReportFilter Data Object
 */
final class SitePerformanceReportFilter
{
    /**
     * The report will include data for only the specified distribution medium. For example, you can use the filter to include data for only search ads.
     * @var AdDistributionReportFilter
     */
    public $AdDistribution;

    /**
     * The report will include data for only the specified ad types. For example, the report can include data for mobile or text ads. You can specify one or more ad types.
     * @var AdTypeReportFilter
     */
    public $AdType;

    /**
     * The report will include data for only the specified delivered match types (as opposed to the bid match type). For example, you can use the filter to include data for ads that were delivered using the exact or phrase match type.
     * @var DeliveredMatchTypeReportFilter
     */
    public $DeliveredMatchType;

    /**
     * The report will include data for only the specified types of devices on which the ad is displayed. For example, you can use the filter to include data for only text ads displayed on smartphones.
     * @var DeviceTypeReportFilter
     */
    public $DeviceType;

    /**
     * The report will include data for only the specified Bing Ads websites where the ads are displayed. For example, you can use the filter to include data for only ads displayed on Bing.com (United States).
     * @var LanguageAndRegionReportFilter
     */
    public $LanguageAndRegion;

    /**
     * The report will include data for only the specified websites. The list can contain a maximum of 300 identifiers.
     * @var long[]
     */
    public $SiteIds;
}
