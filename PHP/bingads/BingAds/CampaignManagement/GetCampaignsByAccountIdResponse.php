<?php

namespace BingAds\CampaignManagement;

/**
 * Response object for the GetCampaignsByAccountId service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn236299(v=msads.90).aspx GetCampaignsByAccountIdResponse Response Object
 */
final class GetCampaignsByAccountIdResponse
{
    /**
     * An array of Campaign objects that represents the campaigns that were retrieved. If no campaigns exist, an empty array is returned.
     * @var Campaign[]
     */
    public $Campaigns;
}
