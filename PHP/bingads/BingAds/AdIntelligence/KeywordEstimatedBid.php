<?php

namespace BingAds\AdIntelligence;

/**
 * Defines an object that contains the keyword and the suggested minimum bid value for each match type.
 * @link http://msdn.microsoft.com/en-us/library/gg986832(v=msads.80).aspx KeywordEstimatedBid Data Object
 */
final class KeywordEstimatedBid
{
    /**
     * The keyword to which the estimates apply.
     * @var string
     */
    public $Keyword;

    /**
     * An array of EstimatedBidAndTraffic objects that contains the suggested minimum bid value for the keyword and match type.
     * @var EstimatedBidAndTraffic[]
     */
    public $EstimatedBids;
}
