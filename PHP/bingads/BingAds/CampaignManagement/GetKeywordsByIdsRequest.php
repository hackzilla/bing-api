<?php

namespace BingAds\CampaignManagement;

/**
 * Retrieves the specified keywords.
 * @link http://msdn.microsoft.com/en-us/library/dn277505(v=msads.90).aspx GetKeywordsByIdsRequest Request Object
 */
final class GetKeywordsByIdsRequest
{
    /**
     * The identifier of the ad group whose keywords you want to get.
     * @var long
     */
    public $AdGroupId;

    /**
     * A maximum of 1,000 identifiers of the keywords to get.
     * @var long[]
     */
    public $KeywordIds;
}
