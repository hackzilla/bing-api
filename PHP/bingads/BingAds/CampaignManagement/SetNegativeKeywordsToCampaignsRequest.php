<?php

namespace BingAds\CampaignManagement;

/**
 * Sets the negative keywords of the specified campaigns.
 * @link http://msdn.microsoft.com/en-us/library/ee703964(v=MSADS.80).aspx SetNegativeKeywordsToCampaignsRequest Request Object
 */
final class SetNegativeKeywordsToCampaignsRequest
{
    /**
     * The identifier of the account that contains the campaigns.
     * @var long
     */
    public $AccountId;

    /**
     * An array of CampaignNegativeKeywords objects that identify the campaigns to update with the specified negative keywords.
     * @var CampaignNegativeKeywords[]
     */
    public $CampaignNegativeKeywords;
}
