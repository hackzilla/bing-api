<?php

namespace BingAds\Optimizer;

/**
 * Defines an object that contains the suggested budget with estimated clicks and impressions opportunities.The budget opportunity is an estimate based on the last 15 days of performance data, and not a prediction or guarantee of future performance.
 * @link http://msdn.microsoft.com/en-us/library/hh418054(v=msads.90).aspx BudgetOpportunity Data Object
 */
final class BudgetOpportunity extends Opportunity
{
    /**
     * The type of budget that the campaign uses.
     * @var BudgetLimitType
     */
    public $BudgetType;

    /**
     * The identifier of the campaign to which the suggested budget applies.
     * @var long
     */
    public $CampaignId;

    /**
     * The campaign's current budget.
     * @var double
     */
    public $CurrentBudget;

    /**
     * The estimated clicks opportunities corresponding to the suggested budget.
     * @var double
     */
    public $IncreaseInClicks;

    /**
     * The estimated impressions opportunities corresponding to the suggested budget.
     * @var long
     */
    public $IncreaseInImpressions;

    /**
     * The estimated percentage increase in clicks corresponding to the suggested budget.
     * @var int
     */
    public $PercentageIncreaseInClicks;

    /**
     * The estimated percentage increase in impressions corresponding to the suggested budget.
     * @var int
     */
    public $PercentageIncreaseInImpressions;

    /**
     * The suggested budget based on the last 15 days of performance history for the corresponding campaign.
     * @var double
     */
    public $RecommendedBudget;
}
