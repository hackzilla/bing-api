<?php

namespace BingAds\AdIntelligence;

/**
 * Defines an object that contains estimates of clicks, average cost per click (CPC), impressions, click-through rate (CTR), and total cost that the specified ad group could generate if you used the suggested bid price.
 * @link http://msdn.microsoft.com/en-us/library/dn144841(v=msads.80).aspx AdGroupEstimatedBid Data Object
 */
final class AdGroupEstimatedBid
{
    /**
     * The estimated minimum number of clicks per week that the ad group could generate per week.
     * @var int
     */
    public $MinClicksPerWeek;

    /**
     * The estimated maximum number of clicks that the ad group could generate per week by using the specified keyword.
     * @var int
     */
    public $MaxClicksPerWeek;

    /**
     * The estimated average CPC that the ad group could generate by using the specified match type and bid value.
     * @var decimal
     */
    public $AverageCPC;

    /**
     * The estimated minimum number of impressions that the ad group could generate per week.
     * @var int
     */
    public $MinImpressionsPerWeek;

    /**
     * The estimated maximum number of impressions that the ad group could generate per week.
     * @var int
     */
    public $MaxImpressionsPerWeek;

    /**
     * The estimated CTR that the ad group could generate by using the specified match type and bid value.
     * @var double
     */
    public $CTR;

    /**
     * The estimated minimum weekly cost of using the specified keyword in the corresponding ad group.
     * @var decimal
     */
    public $MinTotalCostPerWeek;

    /**
     * The estimated maximum weekly cost of using the specified keyword in the corresponding ad group.
     * @var decimal
     */
    public $MaxTotalCostPerWeek;

    /**
     * The monetary unit of the cost estimates and suggested bid value. For possible values, see the Currency value set.
     * @var Currency
     */
    public $Currency;

    /**
     * The minimum ad group level default bid value to use that could result in an ad appearing in the specified target position in the search results.
     * @var double
     */
    public $EstimatedAdGroupBid;
}
