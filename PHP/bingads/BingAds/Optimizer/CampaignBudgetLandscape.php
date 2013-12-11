<?php

namespace BingAds\Optimizer;

/**
 * Defines an object that contains a list of budget points for a campaign. You may use the budget points to compare the proposed budgets to your current budget, with the corresponding estimates for impressions, clicks, and cost.The campaign budget landscape is an estimate based on the last 15 days of performance data, and not a prediction or guarantee of future performance.
 * @link http://msdn.microsoft.com/en-us/library/dn434660(v=msads.90).aspx CampaignBudgetLandscape Data Object
 */
final class CampaignBudgetLandscape extends Opportunity
{
    /**
     * The date when data for budget points were most recently updated by the system.
     * @var dateTime
     */
    public $BaseDate;

    /**
     * The list of budget points, including budget point type and budget landscape points.
     * @var BudgetPoint[]
     */
    public $BudgetPoints;

    /**
     * The identifier of the campaign corresponding to the list of budget points.
     * @var long
     */
    public $CampaignId;
}
