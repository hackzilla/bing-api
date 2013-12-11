<?php

namespace BingAds\Reporting;

/**
 * Defines the criteria to use to filter the keyword performance report data.
 * @link http://msdn.microsoft.com/en-us/library/bb672082(v=msads.90).aspx KeywordPerformanceReportFilter Data Object
 */
final class KeywordPerformanceReportFilter
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
     * The report will include data for only the specified bid match types (as opposed to the delivered match type).For example, you can use the filter to include data for ads that were bid on using the exact or phrase match type.
     * @var BidMatchTypeReportFilter
     */
    public $BidMatchType;

    /**
     * The report will include data for only the specified delivered match types (as opposed to the bid match type).For example, you can use the filter to include data for ads that were delivered using the exact or phrase match type.
     * @var DeliveredMatchTypeReportFilter
     */
    public $DeliveredMatchType;

    /**
     * The report will include data for only the specified types of devices on which the ad is displayed. For example, you can use the filter to include data for only text ads displayed on smartphones.
     * @var DeviceTypeReportFilter
     */
    public $DeviceType;

    /**
     * The report will include data for only keywords with the specified relevance. You can filter the report by one or more of the following relevance values.
     * @var int[]
     */
    public $KeywordRelevance;

    /**
     * The report will include data for only the specified keywords. You can specify a maximum of 75 keywords. Each keyword can contain a maximum of 100 characters.
     * @var string[]
     */
    public $Keywords;

    /**
     * The report will include data for only the specified landing page relevance. You can filter the report by one or more of the following relevance values.
     * @var int[]
     */
    public $LandingPageRelevance;

    /**
     * The report will include data for only the specified landing page user experience. You can filter the report by one or more of the following user experience values.
     * @var int[]
     */
    public $LandingPageUserExperience;

    /**
     * The report will include data for only websites that used the specified languages. For a list of possible values, see Ad Languages.
     * @var string[]
     */
    public $LanguageCode;

    /**
     * The report will include data for only keywords with the specified quality scores. You can filter the report based on one or more of the following relevance values.
     * @var int[]
     */
    public $QualityScore;
}
