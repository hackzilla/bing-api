<?php

namespace BingAds\Reporting;

/**
 * Defines the criteria to use to filter the ad extension by keyword report data.
 * @link http://msdn.microsoft.com/en-us/library/dn393943(v=msads.90).aspx AdExtensionByKeywordReportFilter Data Object
 */
final class AdExtensionByKeywordReportFilter
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
