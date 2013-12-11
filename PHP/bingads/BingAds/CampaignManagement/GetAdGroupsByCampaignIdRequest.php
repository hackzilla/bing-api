<?php

namespace BingAds\CampaignManagement;

/**
 * Gets the ad groups that exist within a specified campaign.
 * @link http://msdn.microsoft.com/en-us/library/bb671869(v=MSADS.80).aspx GetAdGroupsByCampaignIdRequest Request Object
 */
final class GetAdGroupsByCampaignIdRequest
{
    /**
     * The identifier of the campaign that contains the ad groups to get.
     * @var long
     */
    public $CampaignId;
}
