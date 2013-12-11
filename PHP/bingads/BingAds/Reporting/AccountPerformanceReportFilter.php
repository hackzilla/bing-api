<?php

namespace BingAds\Reporting;

/**
 * Defines the criteria to use to filter the account performance report data.
 * @link http://msdn.microsoft.com/en-us/library/bb671671(v=msads.90).aspx AccountPerformanceReportFilter Data Object
 */
final class AccountPerformanceReportFilter
{
    /**
     * The report will include data for only the specified distribution medium. For example, you can use the filter to include data for only search ads.
     * @var AdDistributionReportFilter
     */
    public $AdDistribution;

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
