<?php

namespace BingAds\CampaignManagement;

/**
 * Resumes one or more campaigns.
 * @link http://msdn.microsoft.com/en-us/library/bb671532(v=MSADS.80).aspx ResumeCampaignsRequest Request Object
 */
final class ResumeCampaignsRequest
{
    /**
     * The identifier of the account that contains the campaigns.
     * @var long
     */
    public $AccountId;

    /**
     * An array of identifiers that identifies the campaigns to resume.
     * @var long[]
     */
    public $CampaignIds;
}
