<?php

namespace BingAds\CampaignManagement;

/**
 * Response object for the GetCampaignsByAccountId service operation.
 * @link http://msdn.microsoft.com/en-us/library/bb672097(v=MSADS.80).aspx GetCampaignsByAccountIdResponse Response Object
 */
final class GetCampaignsByAccountIdResponse
{
    /**
     * An array of Campaign objects that represents the campaigns that were retrieved. If no campaigns exist, an empty array is returned.
     * @var Campaign[]
     */
    public $Campaigns;
}
