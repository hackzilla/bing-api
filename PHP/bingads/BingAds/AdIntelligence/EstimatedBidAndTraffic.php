<?php

namespace BingAds\AdIntelligence;

/**
 * Defines an object that contains estimates of clicks, average cost per click (CPC), impressions, click-through rate (CTR), and total cost for the specified keyword given the suggested bid.The estimates are not a prediction or guarantee of future performance.
 * @link http://msdn.microsoft.com/en-us/library/gg986821(v=msads.90).aspx EstimatedBidAndTraffic Data Object
 */
final class EstimatedBidAndTraffic
{
    /**
     * The keyword match type used to determine the estimates.
     * @var MatchType
     */
    public $MatchType;

    /**
     * The estimated minimum number of clicks per week.
     * @var double
     */
    public $MinClicksPerWeek;

    /**
     * The estimated maximum number of clicks per week.
     * @var double
     */
    public $MaxClicksPerWeek;

    /**
     * The estimated average CPC.
     * @var double
     */
    public $AverageCPC;

    /**
     * The estimated minimum number of impressions per week.
     * @var long
     */
    public $MinImpressionsPerWeek;

    /**
     * The estimated maximum number of impressions per week.
     * @var long
     */
    public $MaxImpressionsPerWeek;

    /**
     * The estimated CTR.
     * @var double
     */
    public $CTR;

    /**
     * The estimated minimum cost per week.
     * @var double
     */
    public $MinTotalCostPerWeek;

    /**
     * The estimated maximum cost per week.
     * @var double
     */
    public $MaxTotalCostPerWeek;

    /**
     * The monetary unit of the cost estimates and suggested bid value.
     * @var Currency
     */
    public $Currency;

    /**
     * The suggested bid value.
     * @var double
     */
    public $EstimatedMinBid;
}
