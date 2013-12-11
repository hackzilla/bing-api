<?php

namespace BingAds\AdIntelligence;

/**
 * Response object for the GetHistoricalSearchCountByDevice service operation.
 * @link http://msdn.microsoft.com/en-us/library/hh921748(v=MSADS.80).aspx GetHistoricalSearchCountByDeviceResponse Response Object
 */
final class GetHistoricalSearchCountByDeviceResponse
{
    /**
     * An array of KeywordSearchCountByDevice objects. The array contains an object for each keyword and device-type combination that you specified in the request, if data is available. For more information, see Remarks.
     * @var KeywordSearchCountByDevice[]
     */
    public $KeywordSearchCounts;
}
