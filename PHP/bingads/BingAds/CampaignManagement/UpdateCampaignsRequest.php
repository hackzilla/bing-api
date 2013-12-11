<?php

namespace BingAds\CampaignManagement;

/**
 * Updates one or more campaigns of the specified account.
 * @link http://msdn.microsoft.com/en-us/library/bb671561(v=MSADS.80).aspx UpdateCampaignsRequest Request Object
 */
final class UpdateCampaignsRequest
{
    /**
     * The identifier of the account that contains the campaign to update.
     * @var long
     */
    public $AccountId;

    /**
     * An array that can contain a maximum of 100 Campaign objects to update.
     * @var Campaign[]
     */
    public $Campaigns;
}
