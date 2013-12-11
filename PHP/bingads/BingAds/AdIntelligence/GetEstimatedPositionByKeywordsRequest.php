<?php

namespace BingAds\AdIntelligence;

/**
 * Gets the estimated position in the search results if the specified bid value would be used for the specified keywords. In addition, the operation provides estimates of clicks, average cost per click (CPC), and impressions that the keywords could be generated with the estimated bid.The estimates are not a prediction or guarantee of future performance.
 * @link http://msdn.microsoft.com/en-us/library/dn337006(v=msads.90).aspx GetEstimatedPositionByKeywordsRequest Request Object
 */
final class GetEstimatedPositionByKeywordsRequest
{
    /**
     * An array of keywords for which you want to get the estimated position in the search results, based on the specified bid value. You may specify a maximum of 1,000 keywords and each keyword can contains a maximum of 100 characters.
     * @var string[]
     */
    public $Keywords;

    /**
     * The maximum bid value to use to determine the estimated position in the search results.
     * @var double
     */
    public $MaxBid;

    /**
     * The language in which the keywords are written.
     * @var string
     */
    public $Language;

    /**
     * The country codes of the countries/regions to use as the source of data for estimating the position.
     * @var string[]
     */
    public $PublisherCountries;

    /**
     * The monetary unit to use to calculate the cost estimates and suggested bid value.
     * @var Currency
     */
    public $Currency;

    /**
     * An array of unique match types for which you want to get estimates.
     * @var MatchType[]
     */
    public $MatchTypes;

    /**
     * The identifier of the campaign that owns the ad group specified in AdGroupId. If you do not specify an ad group, the campaign's performance data is used to help determine how well the keyword might perform in the context of the campaign.
     * @var long
     */
    public $CampaignId;

    /**
     * @var long
     */
    public $AdgroupId;
}
