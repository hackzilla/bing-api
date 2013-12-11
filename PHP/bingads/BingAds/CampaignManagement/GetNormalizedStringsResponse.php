<?php

namespace BingAds\CampaignManagement;

/**
 * Response object for the GetNormalizedStrings service operation.
 * @link http://msdn.microsoft.com/en-us/library/ff728531(v=MSADS.80).aspx GetNormalizedStringsResponse Response Object
 */
final class GetNormalizedStringsResponse
{
    /**
     * An array of normalized strings. The items in this array correspond directly to the items in the Strings array that you specified in the request message.
     * @var string[]
     */
    public $NormalizedStrings;
}
