<?php

namespace BingAds\AdIntelligence;

/**
 * Defines a key performance index object for a keyword. The object contains the historical performance statistics of the keyword for the specified match type and ad position.
 * @link http://msdn.microsoft.com/en-us/library/gg986837(v=msads.90).aspx KeywordKPI Data Object
 */
final class KeywordKPI
{
    /**
     * The match type that you specified in the request.
     * @var MatchType
     */
    public $MatchType;

    /**
     * The position in the search results in which the ad appeared.
     * @var AdPosition
     */
    public $AdPosition;

    /**
     * The number of clicks that the keyword and match type generated during the specified time interval.
     * @var int
     */
    public $Clicks;

    /**
     * The number of impressions that the keyword and match type generated during the specified time interval.
     * @var long
     */
    public $Impressions;

    /**
     * The average cost per click (CPC). The average CPC is calculated by dividing the cost of all clicks by the number of clicks.
     * @var double
     */
    public $AverageCPC;

    /**
     * The click-through rate (CTR) as a percentage. The CTR is calculated by dividing the number of clicks by the number of impressions and multiplying the result by 100.
     * @var double
     */
    public $CTR;

    /**
     * The cost of using the specified keyword and match type during the specified time interval.
     * @var double
     */
    public $TotalCost;

    /**
     * The average bid of the keyword.
     * @var double
     */
    public $AverageBid;
}
