<?php

namespace BingAds\CampaignManagement;

/**
 * Response object for the GetAdGroupCriterionsByAdGroupId service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn277517(v=msads.90).aspx GetAdGroupCriterionsByAdGroupIdResponse Response Object
 */
final class GetAdGroupCriterionsByAdGroupIdResponse
{
    /**
     * The list of criterions that you requested. If the ad group does not contain the specified types of criterion, the list is empty.
     * @var AdGroupCriterion[]
     */
    public $AdGroupCriterions;
}
