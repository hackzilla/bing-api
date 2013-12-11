<?php

namespace BingAds\AdIntelligence;

/**
 * Gets the historical performance of one or more keywords used in search queries. The results are broken out by device type.
 * @link http://msdn.microsoft.com/en-us/library/hh921741(v=MSADS.80).aspx GetHistoricalKeywordPerformanceByDeviceRequest Request Object
 */
final class GetHistoricalKeywordPerformanceByDeviceRequest
{
    /**
     * A list of keywords for which you want to get historical performance data. The data is broken out by the device type, match type, and target ad position.
     * @var string[]
     */
    public $Keywords;

    /**
     * The time period that identifies the pool of data to use to calculate the key performance index (KPI) of the specified keywords. For example, use data from the previous seven days or previous 30 days to calculate the KPI.
     * @var TimeInterval
     */
    public $TimeInterval;

    /**
     * The position in the search results for which you want to get performance data.
     * @var AdPosition
     */
    public $TargetAdPosition;

    /**
     * A list of one or more match types. You cannot specify the Content match type.
     * @var MatchType[]
     */
    public $MatchTypes;

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

    /**
     * A list of one or more of the following device types. The default is Computers.
     * @var string[]
     */
    public $Devices;
}
