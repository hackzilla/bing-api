<?php

namespace BingAds\CampaignManagement;

/**
 * Response object for the GetNegativeKeywordsByAdGroupIds service operation.
 * @link http://msdn.microsoft.com/en-us/library/ee703980(v=MSADS.80).aspx GetNegativeKeywordsByAdGroupIdsResponse Response Object
 */
final class GetNegativeKeywordsByAdGroupIdsResponse
{
    /**
     * An array of AdGroupNegativeKeywords objects that contains the negative keywords of the specified ad groups.
     * @var AdGroupNegativeKeywords[]
     */
    public $AdGroupNegativeKeywords;
}
