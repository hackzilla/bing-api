<?php

namespace BingAds\AdIntelligence;

/**
 * Gets the estimated position in the search results if the specified keywords use the specified bid value. In addition, the operation provides estimates of clicks, average cost per click (CPC), and impressions that the keywords could generate, based on the specified bid value.
 * @link http://msdn.microsoft.com/en-us/library/gg986833(v=MSADS.80).aspx GetEstimatedPositionByKeywordsRequest Request Object
 */
final class GetEstimatedPositionByKeywordsRequest
{
    /**
     * An array of keywords for which you want to get the estimated position in the search results, based on the specified bid value. You can specify a maximum of 1,000 keywords and each keyword can contains a maximum of 100 characters.
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
     * The identifier of the campaign that owns the ad group specified in AdGroupId. If you do not specify an ad group, the campaign's performance data from the previous seven days is used to help determine how well the keyword might have performed in the context of the campaign.
     * @var string
     */
    public $CampaignId;

    /**
     * @var string
     */
    public $AdgroupId;
}
