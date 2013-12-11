<?php

namespace BingAds\CampaignManagement;

/**
 * Pauses one or more campaigns.
 * @link http://msdn.microsoft.com/en-us/library/bb672095(v=MSADS.80).aspx PauseCampaignsRequest Request Object
 */
final class PauseCampaignsRequest
{
    /**
     * The identifier of the account that contains the campaigns that will be paused.
     * @var long
     */
    public $AccountId;

    /**
     * An array of identifiers that identifies the campaigns that will be paused.
     * @var long[]
     */
    public $CampaignIds;
}
