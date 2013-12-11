<?php

namespace BingAds\Optimizer;

/**
 * Defines an object that contains daily impressions and clicks estimates for one of the last 15 days.The budget landscape point is an estimate based on the last 15 days of performance data, and not a prediction or guarantee of future performance.
 * @link http://msdn.microsoft.com/en-us/library/dn434658(v=msads.90).aspx BudgetLandscapePoint Data Object
 */
final class BudgetLandscapePoint
{
    /**
     * Represents one day within the last 15 days.
     * @var dateTime
     */
    public $BudgetLandscapePointDate;

    /**
     * The real historical campaign clicks performance for the day, if the budget on the corresponding day is equal to your current budget.
     * @var double
     */
    public $Clicks;

    /**
     * The estimated clicks performance for the day , given the provided BudgetAmount element of the BudgetPoint object.
     * @var double
     */
    public $EstimatedClicks;

    /**
     * The estimated impressions performance for the day, given the provided BudgetAmount element of the BudgetPoint object.
     * @var long
     */
    public $EstimatedImpressions;

    /**
     * The real historical campaign impressions performance for the day, if the budget on the corresponding day is equal to your current budget.
     * @var long
     */
    public $Impressions;
}
