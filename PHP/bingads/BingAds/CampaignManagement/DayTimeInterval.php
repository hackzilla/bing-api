<?php

namespace BingAds\CampaignManagement;

/**
 * Defines a time interval for a day, such as the opening and closing time of a business.
 * @link http://msdn.microsoft.com/en-us/library/dd796784(v=msads.80).aspx DayTimeInterval Data Object
 */
final class DayTimeInterval
{
    /**
     * The beginning time.
     * @var TimeOfTheDay
     */
    public $Begin;

    /**
     * The ending time.
     * @var TimeOfTheDay
     */
    public $End;
}
