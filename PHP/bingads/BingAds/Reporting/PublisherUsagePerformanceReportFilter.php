<?php

namespace BingAds\Reporting;

/**
 * Defines the criteria to use to filter the publisher usage performance report data.
 * @link http://msdn.microsoft.com/en-us/library/dd796865(v=msads.90).aspx PublisherUsagePerformanceReportFilter Data Object
 */
final class PublisherUsagePerformanceReportFilter
{
    /**
     * The report will include data for only the specified distribution medium. For example, you may use the filter to include data for only search ads.
     * @var AdDistributionReportFilter
     */
    public $AdDistribution;

    /**
     * The report will include data for only websites that used the specified languages. For a list of possible values, see Ad Languages.
     * @var string[]
     */
    public $LanguageCode;

    /**
     * The report will include data for only the specified pricing model. For example, you may use the filter to include data solely for ad groups in a cost per click (Cpc) pricing model.
     * @var PricingModelReportFilter
     */
    public $PricingModel;
}
