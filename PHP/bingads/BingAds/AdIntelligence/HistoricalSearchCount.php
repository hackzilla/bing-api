<?php

namespace BingAds\AdIntelligence;

/**
 * Defines an object that contains the number of times that the keyword was used in a search query during the specified month.
 * @link http://msdn.microsoft.com/en-us/library/gg712247(v=msads.80).aspx HistoricalSearchCount Data Object
 */
final class HistoricalSearchCount
{
    /**
     * The number of times that the keyword was used in a search query during the specified month.
     * @var int
     */
    public $SearchCount;

    /**
     * The month when the count was captured.
     * @var MonthAndYear
     */
    public $MonthAndYear;
}
