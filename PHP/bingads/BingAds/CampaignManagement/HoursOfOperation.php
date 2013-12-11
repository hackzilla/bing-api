<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the hours of operation of a business.
 * @link http://msdn.microsoft.com/en-us/library/dd796949(v=msads.80).aspx HoursOfOperation Data Object
 */
final class HoursOfOperation
{
    /**
     * The day of the week that these hours apply to.
     * @var Day
     */
    public $Day;

    /**
     * The first block of time that the business is open.
     * @var DayTimeInterval
     */
    public $openTime1;

    /**
     * The second block of time that the business is open.
     * @var DayTimeInterval
     */
    public $openTime2;
}
