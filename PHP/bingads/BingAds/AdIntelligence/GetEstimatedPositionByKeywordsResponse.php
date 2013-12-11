<?php

namespace BingAds\AdIntelligence;

/**
 * Response object for the GetEstimatedPositionByKeywords service operation.
 * @link http://msdn.microsoft.com/en-us/library/gg986833(v=MSADS.80).aspx GetEstimatedPositionByKeywordsResponse Response Object
 */
final class GetEstimatedPositionByKeywordsResponse
{
    /**
     * An array of KeywordEstimatedPosition objects. The array contains an item for each keyword specified in the request. If the keyword is not valid, the corresponding item in the array will be null.
     * @var KeywordEstimatedPosition[]
     */
    public $KeywordEstimatedPositions;
}
