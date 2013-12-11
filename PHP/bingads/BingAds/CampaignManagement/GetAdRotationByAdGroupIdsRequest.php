<?php

namespace BingAds\CampaignManagement;

/**
 * Gets the ad rotation type applied to the specified ad groups.
 * @link http://msdn.microsoft.com/en-us/library/jj219948(v=MSADS.80).aspx GetAdRotationByAdGroupIdsRequest Request Object
 */
final class GetAdRotationByAdGroupIdsRequest
{
    /**
     * The identifiers of the ad groups whose ad rotation type you want to get. The maximum number of identifiers that you can specify is 1,000.
     * @var long[]
     */
    public $AdGroupIds;

    /**
     * The identifier of the campaign that owns the specified ad groups.
     * @var long
     */
    public $CampaignId;
}
