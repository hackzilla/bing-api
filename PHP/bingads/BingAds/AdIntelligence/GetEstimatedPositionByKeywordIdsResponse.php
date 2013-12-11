<?php

namespace BingAds\AdIntelligence;

/**
 * Response object for the GetEstimatedPositionByKeywordIds service operation.
 * @link http://msdn.microsoft.com/en-us/library/gg712242(v=MSADS.80).aspx GetEstimatedPositionByKeywordIdsResponse Response Object
 */
final class GetEstimatedPositionByKeywordIdsResponse
{
    /**
     * An array of KeywordIdEstimatedPosition objects. The array contains an item for each keyword specified in the request. If the keyword ID is not valid, the corresponding item in the array will be null.
     * @var KeywordIdEstimatedPosition[]
     */
    public $KeywordEstimatedPositions;
}
