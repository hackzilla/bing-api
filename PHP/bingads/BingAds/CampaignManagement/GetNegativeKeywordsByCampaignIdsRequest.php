<?php

namespace BingAds\CampaignManagement;

/**
 * Retrieves the negative keywords of the specified campaigns.
 * @link http://msdn.microsoft.com/en-us/library/dn277519(v=msads.90).aspx GetNegativeKeywordsByCampaignIdsRequest Request Object
 */
final class GetNegativeKeywordsByCampaignIdsRequest
{
    /**
     * The identifier of the account that contains the campaigns.
     * @var long
     */
    public $AccountId;

    /**
     * An array of identifiers of the campaigns that contain the negative keywords that you want to get.
     * @var long[]
     */
    public $CampaignIds;
}
