<?php

namespace BingAds\Reporting;

/**
 * Defines the criteria to use to filter the geographical location report data.
 * @link http://msdn.microsoft.com/en-us/library/dn393954(v=msads.90).aspx GeographicalLocationReportFilter Data Object
 */
final class GeographicalLocationReportFilter
{
    /**
     * The report will include data for only the specified distribution medium. For example, you can use the filter to include data for only search ads.
     * @var AdDistributionReportFilter
     */
    public $AdDistribution;

    /**
     * The report will include data for only the specified countries/regions where the user that clicked the ad is located.
     * @var string[]
     */
    public $CountryCode;

    /**
     * The report will include data for only websites that used the specified languages. For a list of possible values, see Ad Languages.
     * @var string[]
     */
    public $LanguageCode;
}
