<?php

namespace BingAds\Reporting;

/**
 * Defines the criteria to use to filter the campaign performance report data.
 * @link http://msdn.microsoft.com/en-us/library/bb671808(v=msads.80).aspx CampaignPerformanceReportFilter Data Object
 */
final class CampaignPerformanceReportFilter
{
    /**
     * The report will include data for only the specified distribution medium. For example, you can use the filter to include data for only search ads.
     * @var AdDistributionReportFilter
     */
    public $AdDistribution;

    /**
     * The report will include data for only the specified type of devices on which the ad is displayed. For example, you can use the filter to include data for only text ads displayed on smartphones.
     * @var DeviceTypeReportFilter
     */
    public $DeviceType;

    /**
     * The report will include data for only the specified ad group status values. For example, you can use the filter to include data for only active ad groups.
     * @var CampaignStatusReportFilter
     */
    public $Status;
}
