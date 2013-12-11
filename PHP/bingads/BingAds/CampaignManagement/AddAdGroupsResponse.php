<?php

namespace BingAds\CampaignManagement;

/**
 * Response object for the AddAdGroups service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn277502(v=msads.90).aspx AddAdGroupsResponse Response Object
 */
final class AddAdGroupsResponse
{
    /**
     * An array of long values that represents the identifiers for the ad groups that were added.
     * @var long[]
     */
    public $AdGroupIds;
}
