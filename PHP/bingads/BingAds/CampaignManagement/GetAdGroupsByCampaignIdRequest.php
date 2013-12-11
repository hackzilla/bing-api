<?php

namespace BingAds\CampaignManagement;

/**
 * Gets the ad groups that exist within a specified campaign.
 * @link http://msdn.microsoft.com/en-us/library/dn277524(v=msads.90).aspx GetAdGroupsByCampaignIdRequest Request Object
 */
final class GetAdGroupsByCampaignIdRequest
{
    /**
     * The identifier of the campaign that contains the ad groups to get.
     * @var long
     */
    public $CampaignId;
}
