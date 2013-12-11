<?php

namespace BingAds\Optimizer;

/**
 * Gets the campaign budget opportunities that exist for the specified account.
 * @link http://msdn.microsoft.com/en-us/library/hh418061(v=MSADS.80).aspx GetBudgetOpportunitiesRequest Request Object
 */
final class GetBudgetOpportunitiesRequest
{
    /**
     * The identifier of the account for which you want to discover possible campaign budget opportunities.
     * @var long
     */
    public $AccountId;
}
