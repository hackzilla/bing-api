<?php

namespace BingAds\CampaignManagement;

/**
 * Gets the negative keywords of the specified ad groups.
 * @link http://msdn.microsoft.com/en-us/library/ee703980(v=MSADS.80).aspx GetNegativeKeywordsByAdGroupIdsRequest Request Object
 */
final class GetNegativeKeywordsByAdGroupIdsRequest
{
    /**
     * The identifier of the campaign that contains the ad groups.
     * @var long
     */
    public $CampaignId;

    /**
     * An array of identifiers of the ad groups that contain the negative keywords that you want to get.
     * @var long[]
     */
    public $AdGroupIds;
}
