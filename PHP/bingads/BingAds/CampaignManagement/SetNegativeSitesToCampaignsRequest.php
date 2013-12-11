<?php

namespace BingAds\CampaignManagement;

/**
 * Set the negative site URLs of the specified campaigns.
 * @link http://msdn.microsoft.com/en-us/library/hh300115(v=MSADS.80).aspx SetNegativeSitesToCampaignsRequest Request Object
 */
final class SetNegativeSitesToCampaignsRequest
{
    /**
     * The identifier of the account that contains the campaigns.
     * @var long
     */
    public $AccountId;

    /**
     * An array of CampaignNegativeSites objects that identify the campaigns to update with the specified negative site URLs.
     * @var CampaignNegativeSites[]
     */
    public $CampaignNegativeSites;
}
