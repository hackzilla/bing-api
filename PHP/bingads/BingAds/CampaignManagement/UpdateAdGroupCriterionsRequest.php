<?php

namespace BingAds\CampaignManagement;

/**
 * Updates one or more ad group criterions.
 * @link http://msdn.microsoft.com/en-us/library/dn277527(v=msads.90).aspx UpdateAdGroupCriterionsRequest Request Object
 */
final class UpdateAdGroupCriterionsRequest
{
    /**
     * The identifier of the account that owns the criterions to update.
     * @var long
     */
    public $AccountId;

    /**
     * The list of criterions to update. You may specify a maximum of 1,000 criterions.
     * @var AdGroupCriterion[]
     */
    public $AdGroupCriterions;
}
