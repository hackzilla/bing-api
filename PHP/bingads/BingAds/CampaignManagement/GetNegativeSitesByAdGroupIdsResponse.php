<?php

namespace BingAds\CampaignManagement;

/**
 * Response object for the GetNegativeSitesByAdGroupIds service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn277521(v=msads.90).aspx GetNegativeSitesByAdGroupIdsResponse Response Object
 */
final class GetNegativeSitesByAdGroupIdsResponse
{
    /**
     * An array of AdGroupNegativeSites objects that contains the negative site URLs of the specified ad groups.
     * @var AdGroupNegativeSites[]
     */
    public $AdGroupNegativeSites;
}
