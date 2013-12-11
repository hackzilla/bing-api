<?php

namespace BingAds\Optimizer;

/**
 * Response object for the GetBudgetOpportunities service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn376335(v=msads.90).aspx GetBudgetOpportunitiesResponse Response Object
 */
final class GetBudgetOpportunitiesResponse
{
    /**
     * An array of BudgetOpportunity objects that identify the campaigns whose clicks and impressions may increase if you were to apply the suggested budget. To apply the suggested budget, call the ApplyOpportunities operation.
     * @var BudgetOpportunity[]
     */
    public $Opportunities;
}
