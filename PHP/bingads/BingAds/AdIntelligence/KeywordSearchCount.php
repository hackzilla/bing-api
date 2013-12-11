<?php

namespace BingAds\AdIntelligence;

/**
 * Defines an object that contains a keyword and the historical search count data for each month in the specified date range.
 * @link http://msdn.microsoft.com/en-us/library/gg712245(v=msads.80).aspx KeywordSearchCount Data Object
 */
final class KeywordSearchCount
{
    /**
     * The keyword to which the search count data applies.
     * @var string
     */
    public $Keyword;

    /**
     * An array of HistoricalSearchCount objects that contain a count of the number of times that the keyword was used in a search query. The array contains an item for each month in the specified date range. The items are ordered by calendar month.
     * @var HistoricalSearchCount[]
     */
    public $HistoricalSearchCounts;
}
