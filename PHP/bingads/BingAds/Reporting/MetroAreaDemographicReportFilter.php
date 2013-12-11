<?php

namespace BingAds\Reporting;

/**
 * Defines the criteria to use to filter the metropolitan area demographic report data.
 * @link http://msdn.microsoft.com/en-us/library/bb671825(v=msads.80).aspx MetroAreaDemographicReportFilter Data Object
 */
final class MetroAreaDemographicReportFilter
{
    /**
     * The report will include data for only the specified distribution medium. For example, you can use the filter to include data for only search ads.
     * @var AdDistributionReportFilter
     */
    public $AdDistribution;

    /**
     * The report will include data for only the specified countries/regions where the user that clicked the ad is located.
     * @var CountryReportFilter
     */
    public $Country;

    /**
     * Do not use this filter; it is for backwards compatibility only. Instead, use the LanguageCode filter.
     * @var LanguageAndRegionReportFilter
     */
    public $LanguageAndRegion;

    /**
     * The report will include data for only websites that used the specified languages. For a list of possible values, see LanguageCode Values.
     * @var string[]
     */
    public $LanguageCode;
}
