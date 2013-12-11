<?php

namespace BingAds\AdIntelligence;

/**
 * Defines an object that contains the keyword and the estimated bid value for each match type.The estimates are not a prediction or guarantee of future performance.
 * @link http://msdn.microsoft.com/en-us/library/gg986832(v=msads.90).aspx KeywordEstimatedBid Data Object
 */
final class KeywordEstimatedBid
{
    /**
     * The keyword to which the estimates apply.
     * @var string
     */
    public $Keyword;

    /**
     * A list of EstimatedBidAndTraffic objects that contains the suggested bid value for the keyword and match type. If there is data available for the keyword, the EstimatedBidAndTraffic object will provide an estimated bid value. Otherwise, if no data is available the EstimatedBids element will be null.
     * @var EstimatedBidAndTraffic[]
     */
    public $EstimatedBids;
}
