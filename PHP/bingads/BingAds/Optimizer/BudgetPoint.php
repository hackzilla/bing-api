<?php

namespace BingAds\Optimizer;

/**
 * Defines an object that contains a budget amount and an estimate of daily impressions, clicks, and cost for this budget amount averaged over the last 15 days. Additionally, the object contains a list of budget landscape points with daily impressions and clicks estimates for the given budget amount during the last 15 days.The budget point is an estimate based on the last 15 days of performance data, and not a prediction or guarantee of future performance.
 * @link http://msdn.microsoft.com/en-us/library/dn434659(v=msads.90).aspx BudgetPoint Data Object
 */
final class BudgetPoint
{
    /**
     * A potential new budget.
     * @var double
     */
    public $BudgetAmount;

    /**
     * The list of budget landscape points with daily impressions and clicks estimates for the last 15 days.
     * @var BudgetLandscapePoint[]
     */
    public $BudgetLandscapePoints;

    /**
     * The type of budget relative to a list of budget points. For example, if the budget point type is Current then this object's BudgetAmount element would be equal to the corresponding campaign's daily budget.
     * @var BudgetPointType
     */
    public $BudgetPointType;

    /**
     * The estimated average daily clicks for the given budget amount.
     * @var double
     */
    public $EstimatedAvgDailyClicks;

    /**
     * The estimated average daily cost for the given budget amount.
     * @var double
     */
    public $EstimatedAvgDailyCost;

    /**
     * The estimated average daily impressions for the given budget amount.
     * @var double
     */
    public $EstimatedAvgDailyImpressions;
}
