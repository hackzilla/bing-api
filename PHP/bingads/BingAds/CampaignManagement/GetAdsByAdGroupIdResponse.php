<?php

namespace BingAds\CampaignManagement;

/**
 * Response object for the GetAdsByAdGroupId service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn277534(v=msads.90).aspx GetAdsByAdGroupIdResponse Response Object
 */
final class GetAdsByAdGroupIdResponse
{
    /**
     * An array of Ad objects that represents the ads that have been retrieved. If the ad group doesn't contain ads, this array is empty.
     * @var Ad[]
     */
    public $Ads;
}
