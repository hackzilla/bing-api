<?php

namespace BingAds\CampaignManagement;

/**
 * Response object for the GetKeywordsByEditorialStatus service operation.
 * @link http://msdn.microsoft.com/en-us/library/dd797091(v=MSADS.80).aspx GetKeywordsByEditorialStatusResponse Response Object
 */
final class GetKeywordsByEditorialStatusResponse
{
    /**
     * An array of Keyword objects that contains information about the keywords that were retrieved.
     * @var Keyword[]
     */
    public $Keywords;
}
