<?php

namespace BingAds\CampaignManagement;

/**
 * Gets the specified types of criterions from the specified ad group.
 * @link http://msdn.microsoft.com/en-us/library/dn277517(v=msads.90).aspx GetAdGroupCriterionsByAdGroupIdRequest Request Object
 */
final class GetAdGroupCriterionsByAdGroupIdRequest
{
    /**
     * The identifier of the account that owns the ad group.
     * @var long
     */
    public $AccountId;

    /**
     * The identifier of the ad group that contains the criterions to get.
     * @var long
     */
    public $AdGroupId;

    /**
     * The types of criterions to get from the ad group. You can specify one or more types.
     * @var CriterionType
     */
    public $CriterionTypeFilter;
}
