<?php

namespace BingAds\Reporting;

/**
 * Defines the criteria to use to filter the ad extension by ad report data.
 * @link http://msdn.microsoft.com/en-us/library/dn393942(v=msads.90).aspx AdExtensionByAdReportFilter Data Object
 */
final class AdExtensionByAdReportFilter
{
    /**
     * The report will include data where the ad is displayed on the specified device operating systems. For example, you may use the filter to include data for only ads displayed on Windows devices.
     * @var DeviceOSReportFilter
     */
    public $DeviceOS;

    /**
     * The report will include data where the ad is displayed on the specified device types. For example, you may use the filter to include data for only ads displayed on smartphones.
     * @var DeviceTypeReportFilter
     */
    public $DeviceType;
}
