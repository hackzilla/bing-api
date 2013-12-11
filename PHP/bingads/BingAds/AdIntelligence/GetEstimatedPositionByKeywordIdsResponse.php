<?php

namespace BingAds\AdIntelligence;

/**
 * Response object for the GetEstimatedPositionByKeywordIds service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn336989(v=msads.90).aspx GetEstimatedPositionByKeywordIdsResponse Response Object
 */
final class GetEstimatedPositionByKeywordIdsResponse
{
    /**
     * A list of KeywordIdEstimatedPosition objects. The array contains an item for each keyword specified in the request. If the keyword ID is not valid, the corresponding item in the array will be null.
     * @var KeywordIdEstimatedPosition[]
     */
    public $KeywordEstimatedPositions;
}
