<?php

namespace BingAds\CampaignManagement;

/**
 * Response object for the AddCampaigns service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn277510(v=msads.90).aspx AddCampaignsResponse Response Object
 */
final class AddCampaignsResponse
{
    /**
     * An array of long values that represents the identifiers for the campaigns that were added.
     * @var long[]
     */
    public $CampaignIds;
}
