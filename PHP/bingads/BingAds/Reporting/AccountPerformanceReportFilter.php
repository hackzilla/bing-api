<?php

namespace BingAds\Reporting;

/**
 * Defines the criteria to use to filter the account performance report data.
 * @link http://msdn.microsoft.com/en-us/library/bb671671(v=msads.80).aspx AccountPerformanceReportFilter Data Object
 */
final class AccountPerformanceReportFilter
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
}
