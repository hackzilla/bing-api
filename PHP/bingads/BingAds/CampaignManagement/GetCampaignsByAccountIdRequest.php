<?php

namespace BingAds\CampaignManagement;

/**
 * Gets all the campaigns that exist within a specified account.
 * @link http://msdn.microsoft.com/en-us/library/bb672097(v=MSADS.80).aspx GetCampaignsByAccountIdRequest Request Object
 */
final class GetCampaignsByAccountIdRequest
{
    /**
     * The identifier of the account that contains the campaigns to get.
     * @var long
     */
    public $AccountId;
}
