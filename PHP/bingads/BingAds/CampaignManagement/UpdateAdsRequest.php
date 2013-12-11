<?php

namespace BingAds\CampaignManagement;

/**
 * Updates one or more ads within the specified ad group.
 * @link http://msdn.microsoft.com/en-us/library/bb671471(v=MSADS.80).aspx UpdateAdsRequest Request Object
 */
final class UpdateAdsRequest
{
    /**
     * The ID of the ad group that contains the ads to update.
     * @var long
     */
    public $AdGroupId;

    /**
     * A list of ads to update. You can update a maximum of 50 ads.
     * @var Ad[]
     */
    public $Ads;
}
