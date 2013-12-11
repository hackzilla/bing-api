<?php

namespace BingAds\AdIntelligence;

/**
 * Gets the estimated position in the search results if the specified keywords use the specified bid value. In addition, the operation provides estimates of clicks, average cost per click (CPC), and impressions that the keywords may generate based on the specified bid value.
 * @link http://msdn.microsoft.com/en-us/library/gg712242(v=MSADS.80).aspx GetEstimatedPositionByKeywordIdsRequest Request Object
 */
final class GetEstimatedPositionByKeywordIdsRequest
{
    /**
     * An array of identifiers of the keywords for which you want to get the estimated position in the search results, based on the specified bid value. You can specify a maximum of 100 keywords.
     * @var long[]
     */
    public $KeywordIds;

    /**
     * The maximum bid value to use to determine the estimated position in the search results.
     * @var double
     */
    public $MaxBid;
}
