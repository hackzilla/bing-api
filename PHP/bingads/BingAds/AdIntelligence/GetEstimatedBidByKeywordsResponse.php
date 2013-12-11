<?php

namespace BingAds\AdIntelligence;

/**
 * Response object for the GetEstimatedBidByKeywords service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn336987(v=msads.90).aspx GetEstimatedBidByKeywordsResponse Response Object
 */
final class GetEstimatedBidByKeywordsResponse
{
    /**
     * An array of KeywordEstimatedBid objects. The array contains an item for each keyword specified in the request. If the keyword is not valid, the corresponding item in the array will be null.
     * @var KeywordEstimatedBid[]
     */
    public $KeywordEstimatedBids;

    /**
     * Contains estimates of clicks, average cost per click (CPC), impressions, click-through rate (CTR), and total cost for the specified ad group if you would use the suggested bid.
     * @var AdGroupEstimatedBid
     */
    public $AdGroupEstimatedBid;
}
