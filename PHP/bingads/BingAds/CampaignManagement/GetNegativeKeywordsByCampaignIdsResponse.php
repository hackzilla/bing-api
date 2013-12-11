<?php

namespace BingAds\CampaignManagement;

/**
 * Response object for the GetNegativeKeywordsByCampaignIds service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn277519(v=msads.90).aspx GetNegativeKeywordsByCampaignIdsResponse Response Object
 */
final class GetNegativeKeywordsByCampaignIdsResponse
{
    /**
     * An array of CampaignNegativeKeywords objects that contains the negative keywords of the specified campaigns.
     * @var CampaignNegativeKeywords[]
     */
    public $CampaignNegativeKeywords;
}
