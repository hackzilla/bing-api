<?php

namespace BingAds\AdIntelligence;

/**
 * Defines an object that contains the number of times that the keyword was used in a search query during the specified time period.
 * @link http://msdn.microsoft.com/en-us/library/hh921728(v=msads.90).aspx HistoricalSearchCountPeriodic Data Object
 */
final class HistoricalSearchCountPeriodic
{
    /**
     * The number of times that the keyword was used in a search query on the specified device type during the time period. The count aggregates data from all specified countries.
     * @var long
     */
    public $SearchCount;

    /**
     * The time period in which the count was captured. The type of aggregation (daily, weekly, or monthly) that you specify in the request determines the length of the time period. For example, if you specified weekly aggregation, the time period is a week and the date is the Sunday of the week when the count was captured.
     * @var DayMonthAndYear
     */
    public $DayMonthAndYear;
}
