<?php

namespace BingAds\AdIntelligence;

/**
 * Response object for the GetHistoricalKeywordPerformance service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn336996(v=msads.90).aspx GetHistoricalKeywordPerformanceResponse Response Object
 */
final class GetHistoricalKeywordPerformanceResponse
{
    /**
     * An array of KeywordHistoricalPerformance objects. The array contains an item for each keyword specified in the request. If the keyword is not valid, the corresponding item in the array will be null.
     * @var KeywordHistoricalPerformance[]
     */
    public $KeywordHistoricalPerformances;
}
