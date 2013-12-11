<?php

namespace BingAds\Optimizer;

/**
 * Applies the recommended opportunities that the get opportunities operations returned for example, the GetBidOpportunities operation.
 * @link http://msdn.microsoft.com/en-us/library/dn376334(v=msads.90).aspx ApplyOpportunitiesRequest Request Object
 */
final class ApplyOpportunitiesRequest
{
    /**
     * The identifier of the account that owns the entities to apply the opportunities to.
     * @var long
     */
    public $AccountId;

    /**
     * An array of keys that identifies the opportunities to apply. You can specify a maximum of 10,000 keys.
     * @var string[]
     */
    public $OpportunityKeys;
}
