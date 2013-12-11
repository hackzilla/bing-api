<?php

namespace BingAds\CampaignManagement;

/**
 * Gets the specified keywords.
 * @link http://msdn.microsoft.com/en-us/library/bb671809(v=MSADS.80).aspx GetKeywordsByIdsRequest Request Object
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
