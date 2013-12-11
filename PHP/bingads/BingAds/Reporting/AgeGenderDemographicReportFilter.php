<?php

namespace BingAds\Reporting;

/**
 * Defines the criteria to use to filter the gender demographic report data.
 * @link http://msdn.microsoft.com/en-us/library/bb671580(v=msads.80).aspx AgeGenderDemographicReportFilter Data Object
 */
final class AgeGenderDemographicReportFilter
{
    /**
     * The report will include data for only the specified distribution medium. For example, you can use the filter to include data for only search ads.
     * @var AdDistributionReportFilter
     */
    public $AdDistribution;

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
