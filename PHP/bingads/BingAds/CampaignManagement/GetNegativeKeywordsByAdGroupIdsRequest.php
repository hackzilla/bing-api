<?php

namespace BingAds\CampaignManagement;

/**
 * Retrieves the negative keywords of the specified ad groups.
 * @link http://msdn.microsoft.com/en-us/library/dn277514(v=msads.90).aspx GetNegativeKeywordsByAdGroupIdsRequest Request Object
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
