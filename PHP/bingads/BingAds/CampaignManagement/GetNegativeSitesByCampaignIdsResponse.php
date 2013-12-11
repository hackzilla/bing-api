<?php

namespace BingAds\CampaignManagement;

/**
 * Response object for the GetNegativeSitesByCampaignIds service operation.
 * @link http://msdn.microsoft.com/en-us/library/hh300114(v=MSADS.80).aspx GetNegativeSitesByCampaignIdsResponse Response Object
 */
final class GetNegativeSitesByCampaignIdsResponse
{
    /**
     * An array of CampaignNegativeSites objects that contain the negative site URLs of the specified campaigns.
     * @var CampaignNegativeSites[]
     */
    public $CampaignNegativeSites;
}
