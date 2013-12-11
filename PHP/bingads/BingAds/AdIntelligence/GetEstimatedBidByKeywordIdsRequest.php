<?php

namespace BingAds\AdIntelligence;

/**
 * Gets the minimum suggested bid value of one or more keywords that could result in an ad appearing in the targeted position in the search results. In addition, the operation provides estimates of clicks, average cost per click (CPC), and impressions that the keywords could generate based on the suggested bid price.
 * @link http://msdn.microsoft.com/en-us/library/gg712218(v=MSADS.80).aspx GetEstimatedBidByKeywordIdsRequest Request Object
 */
final class GetEstimatedBidByKeywordIdsRequest
{
    /**
     * An array of identifiers of the keywords for which you want to get the minimum suggested bid values that could result in your ad appearing in the targeted position in the search results. You can specify a maximum of 100 keywords.
     * @var long[]
     */
    public $KeywordIds;

    /**
     * The position in which you want your ads to appear in the search results.
     * @var TargetAdPosition
     */
    public $TargetPositionForAds;

    /**
     * Set to true if you want to get an estimated minimum bid for all requested keywords. If true, some returned elements of the EstimatedBidAndTraffic Data Object may be NULL.
     * @var boolean
     */
    public $GetIncreasedBidCoverage;
}
