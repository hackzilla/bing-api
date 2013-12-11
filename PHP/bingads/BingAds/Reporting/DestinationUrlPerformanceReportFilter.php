<?php

namespace BingAds\Reporting;

/**
 * Defines the criteria to use to filter the destination URL performance report data.
 * @link http://msdn.microsoft.com/en-us/library/bb671544(v=msads.80).aspx DestinationUrlPerformanceReportFilter Data Object
 */
final class DestinationUrlPerformanceReportFilter
{
    /**
     * The report will include data for only the specified distribution medium. For example, you can use the filter to include data for only search ads.
     * @var AdDistributionReportFilter
     */
    public $AdDistribution;

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
