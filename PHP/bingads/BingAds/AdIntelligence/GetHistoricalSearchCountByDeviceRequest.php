<?php

namespace BingAds\AdIntelligence;

/**
 * Gets a count of the number of search queries that included the specified keywords. The results are broken out by device type.
 * @link http://msdn.microsoft.com/en-us/library/hh921748(v=MSADS.80).aspx GetHistoricalSearchCountByDeviceRequest Request Object
 */
final class GetHistoricalSearchCountByDeviceRequest
{
    /**
     * A list of keywords for which you want to get search count data. The data is broken out by the device type.
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
     * The start date of the date range that identifies the poll of data that you want to use to determine the historical search count.
     * @var DayMonthAndYear
     */
    public $StartTimePeriod;

    /**
     * The end date of the date range that identifies the pool of data that you want to use to determine the historical search count.
     * @var DayMonthAndYear
     */
    public $EndTimePeriod;

    /**
     * The type of aggregation to use. For example, you can aggregate the count data by day or month. The start and end time elements specifies the pool of data to use for the aggregation.
     * @var string
     */
    public $TimePeriodRollup;

    /**
     * A list of one or more of the following device types. The default is Computers.
     * @var string[]
     */
    public $Devices;
}
