<?php

namespace BingAds\Reporting;

/**
 * Defines the criteria to use to filter the share of voice report data.
 * @link http://msdn.microsoft.com/en-us/library/jj592908(v=msads.90).aspx ShareOfVoiceReportFilter Data Object
 */
final class ShareOfVoiceReportFilter
{
    /**
     * The report will include data for only the specified distribution medium. For example, you can use the filter to include data for only search ads.
     * @var AdDistributionReportFilter
     */
    public $AdDistribution;

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
     * The report will include data for only the specified keywords. You can specify a maximum of 75 keywords. Each keyword can contain a maximum of 100 characters.
     * @var string[]
     */
    public $Keywords;

    /**
     * The report will include data for only websites that used the specified languages. For a list of possible values, see Ad Languages.
     * @var string[]
     */
    public $LanguageCode;
}
