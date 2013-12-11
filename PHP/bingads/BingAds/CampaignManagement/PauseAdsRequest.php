<?php

namespace BingAds\CampaignManagement;

/**
 * Pauses one or more ads.
 * @link http://msdn.microsoft.com/en-us/library/cc936608(v=MSADS.80).aspx PauseAdsRequest Request Object
 */
final class PauseAdsRequest
{
    /**
     * The identifier of the ad group that contains the ads that will be paused.
     * @var long
     */
    public $AdGroupId;

    /**
     * An array of identifiers that specifies the ads that will be paused.
     * @var long[]
     */
    public $AdIds;
}
