<?php

namespace BingAds\AdIntelligence;

/**
 * Defines an object that contains estimates of clicks, average cost per click (CPC), impressions, click-through rate (CTR), and total cost for the specified ad group given the suggested bid.The estimates are not a prediction or guarantee of future performance.
 * @link http://msdn.microsoft.com/en-us/library/dn144841(v=msads.90).aspx AdGroupEstimatedBid Data Object
 */
final class AdGroupEstimatedBid
{
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
     * @var decimal
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
     * @var decimal
     */
    public $MinTotalCostPerWeek;

    /**
     * The estimated maximum cost per week.
     * @var decimal
     */
    public $MaxTotalCostPerWeek;

    /**
     * The monetary unit of the cost estimates and suggested bid value.
     * @var Currency
     */
    public $Currency;

    /**
     * The estimated ad group level default bid value.
     * @var double
     */
    public $EstimatedAdGroupBid;
}
