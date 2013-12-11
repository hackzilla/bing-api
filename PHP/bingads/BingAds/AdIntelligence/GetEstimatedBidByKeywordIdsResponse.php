<?php

namespace BingAds\AdIntelligence;

/**
 * Response object for the GetEstimatedBidByKeywordIds service operation.
 * @link http://msdn.microsoft.com/en-us/library/gg712218(v=MSADS.80).aspx GetEstimatedBidByKeywordIdsResponse Response Object
 */
final class GetEstimatedBidByKeywordIdsResponse
{
    /**
     * An array of KeywordIdEstimatedBid objects. The array contains a corresponding item for each keyword specified in the request. If the keyword ID is not valid, the corresponding item in the array will be null.
     * @var KeywordIdEstimatedBid[]
     */
    public $KeywordEstimatedBids;
}
