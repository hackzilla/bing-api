<?php

namespace BingAds\CampaignManagement;

/**
 * Adds one or more ad group criterions that determine whether ads in the ad group get served.
 * @link http://msdn.microsoft.com/en-us/library/jj689547(v=MSADS.80).aspx AddAdGroupCriterionsRequest Request Object
 */
final class AddAdGroupCriterionsRequest
{
    /**
     * The identifier of the account to add the criterions to.
     * @var long
     */
    public $AccountId;

    /**
     * A list of criterions that determine whether ads in the ad group are served.
     * @var AdGroupCriterion[]
     */
    public $AdGroupCriterions;
}
