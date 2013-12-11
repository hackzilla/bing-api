<?php

namespace BingAds\AdIntelligence;

/**
 * Gets the estimated bid value of one or more keywords that could result in an ad appearing in the targeted position in the search results.The estimates are not a prediction or guarantee of future performance.
 * @link http://msdn.microsoft.com/en-us/library/dn336987(v=msads.90).aspx GetEstimatedBidByKeywordsRequest Request Object
 */
final class GetEstimatedBidByKeywordsRequest
{
    /**
     * A list of KeywordAndMatchType objects for which you want to get suggested bid values. You may specify a maximum of 1,000 keywords, and each keyword can contain a maximum of 100 characters.
     * @var KeywordAndMatchType[]
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
     * The identifier of the campaign that owns the ad group specified in AdGroupId. If you do not specify an ad group, the campaign's performance data is used to help determine how well the keyword might perform in the context of the campaign.
     * @var long
     */
    public $CampaignId;

    /**
     * @var long
     */
    public $AdgroupId;

    /**
     * Determines whether to return estimates for keyword level bids, ad group level bids, or both.
     * @var int
     */
    public $GetBidsAtLevel;
}
