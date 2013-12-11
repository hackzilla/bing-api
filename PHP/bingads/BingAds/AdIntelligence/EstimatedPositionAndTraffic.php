<?php

namespace BingAds\AdIntelligence;

/**
 * Defines an object that contains the estimated search results position and estimated keyword statistics, such as clicks, average cost per click (CPC), impressions, click-through rate (CTR), and total cost that the specified keyword could generate.
 * @link http://msdn.microsoft.com/en-us/library/gg986823(v=msads.80).aspx EstimatedPositionAndTraffic Data Object
 */
final class EstimatedPositionAndTraffic
{
    /**
     * The keyword match type used to determine the estimates. For possible values, see the MatchType value set.
     * @var MatchType
     */
    public $MatchType;

    /**
     * The estimated minimum number of clicks that the keyword could generate per week by using the specified match type and bid value.
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
     * The monetary unit of the cost values, such as AverageCPC. For possible values, see the Currency value set.
     * @var Currency
     */
    public $Currency;

    /**
     * The position in the search results that could result if you used the specified maximum bid value.
     * @var AdPosition
     */
    public $EstimatedAdPosition;
}
