<?php

namespace BingAds\CampaignManagement;

/**
 * Defines a specific hour target range with bid adjustment.
 * @link http://msdn.microsoft.com/en-us/library/bb671597(v=msads.90).aspx HourTargetBid Data Object
 */
final class HourTargetBid
{
    /**
     * The percent amount by which to adjust the base bid if the current time is within the range of hours being targeted.
     * @var int
     */
    public $BidAdjustment;

    /**
     * The time range to target. For example, you can target the ads to display to users only between the hours of 7:00 AM to 11:00 AM.
     * @var HourRange
     */
    public $Hour;
}
