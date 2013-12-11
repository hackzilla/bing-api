<?php

namespace BingAds\CampaignManagement;

/**
 * Deletes the specified ad group criterions.
 * @link http://msdn.microsoft.com/en-us/library/dn236302(v=msads.90).aspx DeleteAdGroupCriterionsRequest Request Object
 */
final class DeleteAdGroupCriterionsRequest
{
    /**
     * The identifier of the account that owns the criterion to delete.
     * @var long
     */
    public $AccountId;

    /**
     * A list of unique identifiers that identify the criterion to delete. You can specify a maximum on 1,000 identifiers per call.
     * @var long[]
     */
    public $AdGroupCriterionIds;

    /**
     * The identifier of the ad group that owns the criterion to delete.
     * @var long
     */
    public $AdGroupId;
}
