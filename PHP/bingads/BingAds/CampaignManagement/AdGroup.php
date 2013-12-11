<?php

namespace BingAds\CampaignManagement;

/**
 * Defines an ad group.
 * @link http://msdn.microsoft.com/en-us/library/bb671956(v=msads.90).aspx AdGroup Data Object
 */
final class AdGroup
{
    /**
     * Determines whether the ad group contains content ads, search ads, or both.
     * @var AdDistribution
     */
    public $AdDistribution;

    /**
     * Determines the ad rotation type.
     * @var AdRotation
     */
    public $AdRotation;

    /**
     * Determines whether the ad group bids on keyword matches or site placement matches. The default is Keyword.
     * @var BiddingModel
     */
    public $BiddingModel;

    /**
     * The bid to use when the user's query and the ad group's keywords match by using a broad match comparison. A broad match results when words in the keyword are present in the user's query; however, the order of the words can vary.
     * @var Bid
     */
    public $BroadMatchBid;

    /**
     * The bid to use when the keywords that the service extracts from the content page and the ad group's keywords match by using an exact match comparison. An exact match results when all of the words in the keyword exactly match the user's query.
     * @var Bid
     */
    public $ContentMatchBid;

    /**
     * The date that the ads in the ad group will expire. If you do not specify an end date, the ads will not expire.
     * @var Date
     */
    public $EndDate;

    /**
     * The bid to use when the user's query and the ad group's keywords match by using an exact match comparison. An exact match results when all of the words in the keyword exactly match the user's query.
     * @var Bid
     */
    public $ExactMatchBid;

    /**
     * The list of key and value strings for forward compatibility. This element can be used to avoid otherwise breaking changes when new elements are added in future releases.
     */
    public $ForwardCompatibilityMap;

    /**
     * The system generated identifier of the ad group.
     * @var long
     */
    public $Id;

    /**
     * The language of the ads and keywords in the ad group. For possible values, see Ad Copy Languages.
     * @var string
     */
    public $Language;

    /**
     * The name of the ad group. The name must be unique among all active ad groups within the campaign. The name can contain a maximum of 128 characters.
     * @var string
     */
    public $Name;

    /**
     * The search networks where you want your ads to display. The default is OwnedAndOperatedAndSyndicatedSearch.
     * @var Network
     */
    public $Network;

    /**
     * The bid value to use when the user's query and the ad group's keywords match by using a phrase match. A phrase match results when all of the words in the keyword are present in the user's query, and are in the same order.
     * @var Bid
     */
    public $PhraseMatchBid;

    /**
     * You can specify a pricing model based on cost per click (CPC) or cost per 1000 impressions (CPM).
     * @var PricingModel
     */
    public $PricingModel;

    /**
     * The date that the ads in the ad group can begin serving; otherwise, the service can begin serving the ads in the ad group the day that the ad group becomes active.
     * @var Date
     */
    public $StartDate;

    /**
     * The status of the ad group.
     * @var AdGroupStatus
     */
    public $Status;
}
