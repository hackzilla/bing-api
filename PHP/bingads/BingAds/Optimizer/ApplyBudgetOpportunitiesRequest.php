<?php

namespace BingAds\Optimizer;

/**
 * Applies the recommended budget opportunities.
 * @link http://msdn.microsoft.com/en-us/library/hh418055(v=MSADS.80).aspx ApplyBudgetOpportunitiesRequest Request Object
 */
final class ApplyBudgetOpportunitiesRequest
{
    /**
     * The identifier of the account to apply the recommended budget opportunities to.
     * @var long
     */
    public $AccountId;

    /**
     * The list of keys that identify the budget opportunities that you want to apply. The maximum number of keys that you can specify is 10,000.
     * @var string[]
     */
    public $OpportunityKeys;
}
