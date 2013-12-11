<?php

namespace BingAds\CampaignManagement;

/**
 * Updates the specified ad groups in a specified campaign.
 * @link http://msdn.microsoft.com/en-us/library/dn277528(v=msads.90).aspx UpdateAdGroupsRequest Request Object
 */
final class UpdateAdGroupsRequest
{
    /**
     * The identifier of the campaign that owns the ad groups to update.
     * @var long
     */
    public $CampaignId;

    /**
     * An array that can contain a maximum of 1,000 AdGroup objects to update.
     * @var AdGroup[]
     */
    public $AdGroups;
}
