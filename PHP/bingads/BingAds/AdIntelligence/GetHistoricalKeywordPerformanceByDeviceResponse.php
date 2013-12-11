<?php

namespace BingAds\AdIntelligence;

/**
 * Response object for the GetHistoricalKeywordPerformanceByDevice service operation.
 * @link http://msdn.microsoft.com/en-us/library/hh921741(v=MSADS.80).aspx GetHistoricalKeywordPerformanceByDeviceResponse Response Object
 */
final class GetHistoricalKeywordPerformanceByDeviceResponse
{
    /**
     * An array of KeywordHistoricalPerformanceByDevice objects that contains the historical performance data of the keyword and device type combinations.
     * @var KeywordHistoricalPerformanceByDevice[]
     */
    public $KeywordHistoricalPerformances;
}
