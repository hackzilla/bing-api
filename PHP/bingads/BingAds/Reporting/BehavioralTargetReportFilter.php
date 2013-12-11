<?php

namespace BingAds\Reporting;

/**
 * Defines the criteria to use to filter the behavioral segment target report data.
 * @link http://msdn.microsoft.com/en-us/library/dd797013(v=msads.80).aspx BehavioralTargetReportFilter Data Object
 */
final class BehavioralTargetReportFilter
{
    /**
     * The report will include data for only the specified distribution medium. For example, you can use the filter to include data for only search ads.
     * @var AdDistributionReportFilter
     */
    public $AdDistribution;

    /**
     * The report will include data for only the specified behavioral segments. The list can contain a maximum of 300 identifiers.
     * @var long[]
     */
    public $BehavioralIds;

    /**
     * The report will include data for only the specified Bing Ads websites where the ads are displayed. For example, you can use the filter to include data for only ads displayed on Bing.com (United States).
     * @var LanguageAndRegionReportFilter
     */
    public $LanguageAndRegion;
}
