<?php

namespace BingAds\AdIntelligence;

/**
 * Gets a count of the number of search queries that included the specified keywords during the specified time period.
 * @link http://msdn.microsoft.com/en-us/library/gg712217(v=MSADS.80).aspx GetHistoricalSearchCountRequest Request Object
 */
final class GetHistoricalSearchCountRequest
{
    /**
     * An array of keywords for which you want to determine the number of times that the keyword was used in a search query. The array can contain a maximum of 1,000 keywords, and each keyword can contain a maximum of 100 characters.
     * @var string[]
     */
    public $Keywords;

    /**
     * The language in which the keywords are written.
     * @var string
     */
    public $Language;

    /**
     * The country codes of the countries/regions to use as the source of the count data.
     * @var string[]
     */
    public $PublisherCountries;

    /**
     * The start date of the date range that identifies the data that you want to use to determine the historical search count.
     * @var MonthAndYear
     */
    public $StartMonthAndYear;

    /**
     * The end date of the date range that identifies the data that you want to use to determine the historical search count.
     * @var MonthAndYear
     */
    public $EndMonthAndYear;
}
