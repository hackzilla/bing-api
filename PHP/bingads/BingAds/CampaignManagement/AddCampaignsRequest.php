<?php

namespace BingAds\CampaignManagement;

/**
 * Adds one or more campaigns to the specified account.
 * @link http://msdn.microsoft.com/en-us/library/dn277510(v=msads.90).aspx AddCampaignsRequest Request Object
 */
final class AddCampaignsRequest
{
    /**
     * The identifier of the account to add the campaigns to.
     * @var long
     */
    public $AccountId;

    /**
     * An array of Campaign objects to add to the specified account.
     * @var Campaign[]
     */
    public $Campaigns;
}
