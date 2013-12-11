<?php

namespace BingAds\CampaignManagement;

/**
 * Updates the specified ads within a particular ad group.
 * @link http://msdn.microsoft.com/en-us/library/dn277531(v=msads.90).aspx UpdateAdsRequest Request Object
 */
final class UpdateAdsRequest
{
    /**
     * The ID of the ad group that contains the ads to update.
     * @var long
     */
    public $AdGroupId;

    /**
     * A list of ads to update. You may update a maximum of 50 ads.
     * @var Ad[]
     */
    public $Ads;
}
