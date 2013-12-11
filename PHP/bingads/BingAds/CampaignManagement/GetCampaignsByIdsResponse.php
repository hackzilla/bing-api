<?php

namespace BingAds\CampaignManagement;

/**
 * Response object for the GetCampaignsByIds service operation.
 * @link http://msdn.microsoft.com/en-us/library/bb671550(v=MSADS.80).aspx GetCampaignsByIdsResponse Response Object
 */
final class GetCampaignsByIdsResponse
{
    /**
     * An array of Campaign objects that corresponds directly to the campaign identifiers that you specified in the request. If a campaign does not exist, the corresponding element of the array is set to NULL.
     * @var Campaign[]
     */
    public $Campaigns;
}
