<?php

namespace BingAds\CampaignManagement;

/**
 * Pauses one or more ad groups.
 * @link http://msdn.microsoft.com/en-us/library/bb671983(v=MSADS.80).aspx PauseAdGroupsRequest Request Object
 */
final class PauseAdGroupsRequest
{
    /**
     * The identifier of the campaign that contains the ad groups that will be paused.
     * @var long
     */
    public $CampaignId;

    /**
     * An array of identifiers that specifies the ad groups that will be paused.
     * @var long[]
     */
    public $AdGroupIds;
}
