<?php

namespace BingAds\AdIntelligence;

/**
 * Response object for the GetKeywordLocations service operation.
 * @link http://msdn.microsoft.com/en-us/library/hh921764(v=MSADS.80).aspx GetKeywordLocationsResponse Response Object
 */
final class GetKeywordLocationsResponse
{
    /**
     * An array of KeywordLocationResult objects. Each object contains the keyword, geographical location, and percentage of time that users in the geographical location searched for the specified keyword.
     * @var KeywordLocationResult[]
     */
    public $KeywordLocationResult;
}
