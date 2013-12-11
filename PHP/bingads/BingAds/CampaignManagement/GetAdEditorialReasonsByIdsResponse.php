<?php

namespace BingAds\CampaignManagement;

/**
 * Response object for the GetAdEditorialReasonsByIds service operation.
 * @link http://msdn.microsoft.com/en-us/library/ff728460(v=MSADS.80).aspx GetAdEditorialReasonsByIdsResponse Response Object
 */
final class GetAdEditorialReasonsByIdsResponse
{
    /**
     * A collection of ads that failed editorial review and the reason for the failure.
     * @var EditorialReasonCollection[]
     */
    public $EditorialReasons;
}
