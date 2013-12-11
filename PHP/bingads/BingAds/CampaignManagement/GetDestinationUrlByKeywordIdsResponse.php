<?php

namespace BingAds\CampaignManagement;

/**
 * Response object for the GetDestinationUrlByKeywordIds service operation.
 * @link http://msdn.microsoft.com/en-us/library/jj643308(v=MSADS.80).aspx GetDestinationUrlByKeywordIdsResponse Response Object
 */
final class GetDestinationUrlByKeywordIdsResponse
{
    /**
     * A list of destination URLs that correspond directly to the keyword identifiers specified in the request. An item is null if the keyword did not specify a destination URL.
     * @var string[]
     */
    public $DestinationUrls;
}
