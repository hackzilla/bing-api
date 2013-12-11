<?php

namespace BingAds\AdIntelligence;

/**
 * Gets the historical performance of one or more keywords used in search queries.
 * @link http://msdn.microsoft.com/en-us/library/gg986835(v=MSADS.80).aspx GetHistoricalKeywordPerformanceRequest Request Object
 */
final class GetHistoricalKeywordPerformanceRequest
{
    /**
     * An array of keywords for which you want to get historical performance statistics. The array can contain a maximum of 1,000 keywords, and each keyword can contain a maximum of 100 characters.
     * @var string[]
     */
    public $Keywords;

    /**
     * The time period that identifies the data to use to determine the key performance index of the specified keywords. For example, use data from the previous seven days or previous 30 days to determine the keyword performance.
     * @var TimeInterval
     */
    public $TimeInterval;

    /**
     * The position of the search results for which you want to get performance data.
     * @var AdPosition
     */
    public $TargetAdPosition;

    /**
     * The match type for which you want to get historical data.
     * @var MatchType
     */
    public $MatchType;

    /**
     * The language in which the keywords are written.
     * @var string
     */
    public $Language;

    /**
     * The country codes of the countries/regions to use as the source of the historical data.
     * @var string[]
     */
    public $PublisherCountries;
}
