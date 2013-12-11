<?php

namespace BingAds\CampaignManagement;

/**
 * Response object for the GetEditorialReasonsByIds service operation.
 * @link http://msdn.microsoft.com/en-us/library/jj631647(v=MSADS.80).aspx GetEditorialReasonsByIdsResponse Response Object
 */
final class GetEditorialReasonsByIdsResponse
{
    /**
     * A collection of ads or keywords that failed editorial review. The object identifies the reason for the failure and whether it is appealable.
     * @var EditorialReasonCollection[]
     */
    public $EditorialReasons;
}
