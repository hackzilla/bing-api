<?php

namespace BingAds\AdIntelligence;

/**
 * Defines an object that contains estimates of clicks, average cost per click (CPC), impressions, click-through rate (CTR), and total cost that the specified keyword could generate if you used the suggested bid price.
 * @link http://msdn.microsoft.com/en-us/library/gg986821(v=msads.80).aspx EstimatedBidAndTraffic Data Object
 */
final class EstimatedBidAndTraffic
{
    /**
     * The keyword match type used to determine the estimates. For possible values, see the MatchType value set.
     * @var MatchType
     */
    public $MatchType;

    /**
     * The estimated minimum number of clicks per week that the keyword could generate per week by using the specified match type and bid value.
     * @var int
     */
    public $MinClicksPerWeek;

    /**
     * The estimated maximum number of clicks that the keyword could generate per week by using the specified match type and bid value.
     * @var int
     */
    public $MaxClicksPerWeek;

    /**
     * The estimated average CPC that the keyword could generate by using the specified match type and bid value.
     * @var double
     */
    public $AverageCPC;

    /**
     * The estimated minimum number of impressions that the keyword could generate per week by using the specified match type and bid value.
     * @var int
     */
    public $MinImpressionsPerWeek;

    /**
     * The estimated maximum number of impressions that the keyword could generate per week by using the specified match type and bid value.
     * @var int
     */
    public $MaxImpressionsPerWeek;

    /**
     * The estimated CTR that the keyword could generate by using the specified match type and bid value.
     * @var double
     */
    public $CTR;

    /**
     * The estimated minimum weekly cost of using the specified keyword.
     * @var double
     */
    public $MinTotalCostPerWeek;

    /**
     * The estimated maximum weekly cost of using the specified keyword.
     * @var double
     */
    public $MaxTotalCostPerWeek;

    /**
     * The monetary unit of the cost estimates and suggested bid value. For possible values, see the Currency value set.
     * @var Currency
     */
    public $Currency;

    /**
     * The minimum bid value to use that could result in an ad appearing in the specified target position in the search results.
     * @var double
     */
    public $EstimatedMinBid;
}
