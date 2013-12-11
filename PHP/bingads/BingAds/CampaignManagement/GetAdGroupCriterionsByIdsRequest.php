<?php

namespace BingAds\CampaignManagement;

/**
 * Gets the specified criterions.
 * @link http://msdn.microsoft.com/en-us/library/dn277520(v=msads.90).aspx GetAdGroupCriterionsByIdsRequest Request Object
 */
final class GetAdGroupCriterionsByIdsRequest
{
    /**
     * The identifier of the account that owns the criterions to get.
     * @var long
     */
    public $AccountId;

    /**
     * A list of unique identifiers that identify the criterions to get. You can specify a maximum of 1,000 IDs.
     * @var long[]
     */
    public $AdGroupCriterionIds;
}
