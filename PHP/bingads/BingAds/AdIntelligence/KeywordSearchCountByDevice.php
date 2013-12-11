<?php

namespace BingAds\AdIntelligence;

/**
 * Defines an object that contains the number of times the keyword was included in a search query on the specified device type. The count data is aggregated based on the aggregation level specified in the request.
 * @link http://msdn.microsoft.com/en-us/library/hh921737(v=msads.80).aspx KeywordSearchCountByDevice Data Object
 */
final class KeywordSearchCountByDevice
{
    /**
     * The keyword.
     * @var string
     */
    public $Keyword;

    /**
     * The type of device on which users searched for the specified keyword.
     * @var string
     */
    public $Device;

    /**
     * An array of HistoricalSearchCountPeriodic objects that contains the number of times that the keyword was used in a search query during the aggregation time period.
     * @var HistoricalSearchCountPeriodic[]
     */
    public $HistoricalSearchCounts;
}
