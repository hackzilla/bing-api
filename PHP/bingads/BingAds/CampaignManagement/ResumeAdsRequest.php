<?php

namespace BingAds\CampaignManagement;

/**
 * Resumes one or more ad groups.
 * @link http://msdn.microsoft.com/en-us/library/cc936611(v=MSADS.80).aspx ResumeAdsRequest Request Object
 */
final class ResumeAdsRequest
{
    /**
     * The identifier of the ad group that contains the ads to be resumed.
     * @var long
     */
    public $AdGroupId;

    /**
     * An array of identifiers that specifies the ads to be resumed.
     * @var long[]
     */
    public $AdIds;
}
