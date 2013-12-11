<?php

namespace BingAds\AdIntelligence;

/**
 * Defines an object that you use to specify the start and end months of a date range.
 * @link http://msdn.microsoft.com/en-us/library/gg712241(v=msads.80).aspx MonthAndYear Data Object
 */
final class MonthAndYear
{
    /**
     * The month specified as an integer value in the range of 1 to 12, where 1 is January and 12 is December.
     * @var int
     */
    public $Month;

    /**
     * The year specified as a four-digit integer value.
     * @var int
     */
    public $Year;
}
