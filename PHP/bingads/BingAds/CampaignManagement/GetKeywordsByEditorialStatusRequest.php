<?php

namespace BingAds\CampaignManagement;

/**
 * Retrieves the keywords with the specified editorial review status.
 * @link http://msdn.microsoft.com/en-us/library/dn277501(v=msads.90).aspx GetKeywordsByEditorialStatusRequest Request Object
 */
final class GetKeywordsByEditorialStatusRequest
{
    /**
     * The identifier of the ad group that contains the keywords to retrieve.
     * @var long
     */
    public $AdGroupId;

    /**
     * The review status of the keywords to retrieve.
     * @var KeywordEditorialStatus
     */
    public $EditorialStatus;
}
