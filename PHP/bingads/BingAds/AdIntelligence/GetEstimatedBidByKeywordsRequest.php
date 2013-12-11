<?php

namespace BingAds\AdIntelligence;

/**
 * Gets the suggested bid value of one or more keywords that could result in an ad appearing in the targeted position in the search results. In addition, the operation provides estimates of clicks, average cost per click (CPC), and impressions that the keywords could generate based on the suggested bid price.
 * @link http://msdn.microsoft.com/en-us/library/gg986836(v=MSADS.80).aspx GetEstimatedBidByKeywordsRequest Request Object
 */
final class GetEstimatedBidByKeywordsRequest
{
    /**
     * An array of keywords for which you want to get suggested bid values. You can specify a maximum of 1,000 keywords, and each keyword can contain a maximum of 100 characters.
     * @var string[]
     */
    public $Keywords;

    /**
     * The position where you want your ads to appear in the search results.
     * @var TargetAdPosition
     */
    public $TargetPositionForAds;

    /**
     * The language in which the keywords are written.
     * @var string
     */
    public $Language;

    /**
     * The country codes of the countries/regions to use as the source of data for estimating the bids.
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

    /**
     * Set to true if you want to get an estimated minimum bid for all requested keywords. If true, some returned elements of the EstimatedBidAndTraffic Data Object may be NULL.
     * @var boolean
     */
    public $GetIncreasedBidCoverage;

    /**
     * Determines whether to return estimates for keyword level bids, ad group level bids, or both.
     * @var int
     */
    public $GetBidsAtLevel;
}
