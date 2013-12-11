<?php

namespace BingAds\CampaignManagement;

/**
 * Gets the keywords with the specified editorial review status.
 * @link http://msdn.microsoft.com/en-us/library/dd797091(v=MSADS.80).aspx GetKeywordsByEditorialStatusRequest Request Object
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
