<?php

namespace BingAds\CampaignManagement;

/**
 * Resumes one or more ad groups.
 * @link http://msdn.microsoft.com/en-us/library/bb671682(v=MSADS.80).aspx ResumeAdGroupsRequest Request Object
 */
final class ResumeAdGroupsRequest
{
    /**
     * The campaign that contains the ad groups that will be resumed.
     * @var long
     */
    public $CampaignId;

    /**
     * An array of identifiers that identifies the ad groups that will be resumed.
     * @var long[]
     */
    public $AdGroupIds;
}
