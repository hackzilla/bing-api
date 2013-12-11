<?php

namespace BingAds\CampaignManagement;

/**
 * Adds one or more ads to an ad group.
 * @link http://msdn.microsoft.com/en-us/library/bb672045(v=MSADS.80).aspx AddAdsRequest Request Object
 */
final class AddAdsRequest
{
    /**
     * The identifier of the ad group to add the ads to.
     * @var long
     */
    public $AdGroupId;

    /**
     * An array of ads to add to the specified ad group. The maximum number of ads that you can add to an ad group is 50.
     * @var Ad[]
     */
    public $Ads;
}
