<?php

namespace BingAds\Reporting;

/**
 * Defines the criteria to use to filter the ad dynamic text performance report data.
 * @link http://msdn.microsoft.com/en-us/library/bb672086(v=msads.80).aspx AdDynamicTextPerformanceReportFilter Data Object
 */
final class AdDynamicTextPerformanceReportFilter
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
     * The report will include data for only the specified types of devices on which the ad is displayed. For example, you can use the filter to include data for only text ads displayed on smartphones.
     * @var DeviceTypeReportFilter
     */
    public $DeviceType;

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
