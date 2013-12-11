<?php

namespace BingAds\AdIntelligence;

/**
 * Defines an object that contains the number of times the keyword was included in a search query on the specified device type. The count data is aggregated based on the aggregation level specified in the request.
 * @link http://msdn.microsoft.com/en-us/library/gg712245(v=msads.90).aspx KeywordSearchCount Data Object
 */
final class KeywordSearchCount
{
    /**
     * The keyword to which the search count data applies.
     * @var string
     */
    public $Keyword;

    /**
     * The type of device on which users searched for the specified keyword.
     * @var string
     */
    public $Device;

    /**
     * An array of HistoricalSearchCountPeriodic objects that contain a count of the number of times that the keyword was used in a search query. The array contains an item for each month in the specified date range. The items are ordered by calendar month.
     * @var HistoricalSearchCountPeriodic[]
     */
    public $HistoricalSearchCounts;
}
