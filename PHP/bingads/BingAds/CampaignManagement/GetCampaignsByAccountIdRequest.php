<?php

namespace BingAds\CampaignManagement;

/**
 * Retrieves all the campaigns that exist within a specified account.
 * @link http://msdn.microsoft.com/en-us/library/dn236299(v=msads.90).aspx GetCampaignsByAccountIdRequest Request Object
 */
final class GetCampaignsByAccountIdRequest
{
    /**
     * The identifier of the account that contains the campaigns to get.
     * @var long
     */
    public $AccountId;
}
