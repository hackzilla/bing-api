<?php

namespace BingAds\CampaignManagement;

/**
 * Response object for the GetKeywordEditorialReasonsByIds service operation.
 * @link http://msdn.microsoft.com/en-us/library/ff728472(v=MSADS.80).aspx GetKeywordEditorialReasonsByIdsResponse Response Object
 */
final class GetKeywordEditorialReasonsByIdsResponse
{
    /**
     * A collection of keywords that failed editorial review and the reason for the failure.
     * @var EditorialReasonCollection[]
     */
    public $EditorialReasons;
}
