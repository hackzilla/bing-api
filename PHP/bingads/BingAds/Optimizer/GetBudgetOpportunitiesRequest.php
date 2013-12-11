<?php

namespace BingAds\Optimizer;

/**
 * Gets the campaign budget opportunities of the specified account.
 * @link http://msdn.microsoft.com/en-us/library/dn376335(v=msads.90).aspx GetBudgetOpportunitiesRequest Request Object
 */
final class GetBudgetOpportunitiesRequest
{
    /**
     * The identifier of the account for which you want to discover possible campaign budget opportunities.
     * @var long
     */
    public $AccountId;
}
