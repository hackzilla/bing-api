<?php

namespace BingAds\Optimizer;

/**
 * Gets the campaign budget landscape and corresponding budget points for the specified campaign in an account. You may use the budget points to compare your current budget to any of the proposed budgets.
 * @link http://msdn.microsoft.com/en-us/library/dn434657(v=msads.90).aspx GetBudgetLandscapeRequest Request Object
 */
final class GetBudgetLandscapeRequest
{
    /**
     * The identifier of the account for which you want to discover a list of campaign budget suggestions.
     * @var long
     */
    public $AccountId;

    /**
     * The identifier of the campaign for which you want to discover a list of campaign budget suggestions.
     * @var long
     */
    public $CampaignId;
}
