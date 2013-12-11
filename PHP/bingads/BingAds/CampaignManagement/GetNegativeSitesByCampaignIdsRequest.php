<?php

namespace BingAds\CampaignManagement;

/**
 * Gets the negative site URLs of the specified campaigns.
 * @link http://msdn.microsoft.com/en-us/library/hh300114(v=MSADS.80).aspx GetNegativeSitesByCampaignIdsRequest Request Object
 */
final class GetNegativeSitesByCampaignIdsRequest
{
    /**
     * The identifier of the account that contains the campaigns.
     * @var long
     */
    public $AccountId;

    /**
     * An array of identifiers of the campaigns that contain the negative site URLs that you want to get.
     * @var long[]
     */
    public $CampaignIds;
}
