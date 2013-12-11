<?php

namespace BingAds\AdIntelligence;

/**
 * Gets the estimated bid value of one or more keywords - specified by keyword identifier - that could have resulted in an ad appearing in the targeted position in the search results in the last 7 days. In addition, the operation provides estimates of clicks, average cost per click (CPC), and impressions that the keywords could have generated with the estimated bid.The estimates are based on the last 7 days of performance data, and not a prediction or guarantee of future performance.
 * @link http://msdn.microsoft.com/en-us/library/dn336995(v=msads.90).aspx GetEstimatedBidByKeywordIdsRequest Request Object
 */
final class GetEstimatedBidByKeywordIdsRequest
{
    /**
     * An array of identifiers of the keywords for which you want to get the suggested bid values that could have resulted in your ad appearing in the targeted position in the search results. You may specify a maximum of 1,000 keywords.
     * @var long[]
     */
    public $KeywordIds;

    /**
     * The position in which you want your ads to appear in the search results.
     * @var TargetAdPosition
     */
    public $TargetPositionForAds;
}
