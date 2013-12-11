<?php

namespace BingAds\AdIntelligence;

/**
 * Gets the estimated position in the search results if the specified bid value had been used for the keywords in the last 7 days. In addition, the operation provides estimates of clicks, average cost per click (CPC), and impressions that the keywords could have generated with the estimated bid.The estimates are based on the last 7 days of performance data, and not a prediction or guarantee of future performance.
 * @link http://msdn.microsoft.com/en-us/library/dn336989(v=msads.90).aspx GetEstimatedPositionByKeywordIdsRequest Request Object
 */
final class GetEstimatedPositionByKeywordIdsRequest
{
    /**
     * An array of identifiers of the keywords for which you want to get the estimated position in the search results, based on the specified bid value. You may specify a maximum of 1,000 keyword identifiers.
     * @var long[]
     */
    public $KeywordIds;

    /**
     * The maximum bid value to use to determine the estimated position in the search results.
     * @var double
     */
    public $MaxBid;
}
