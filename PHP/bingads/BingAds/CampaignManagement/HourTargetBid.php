<?php

namespace BingAds\CampaignManagement;

/**
 * Defines a time range to target and the percentage used to adjust the base bid.
 * @link http://msdn.microsoft.com/en-us/library/bb671597(v=msads.80).aspx HourTargetBid Data Object
 */
final class HourTargetBid
{
    /**
     * The time range to target. For example, you can target the ads to display to users only between the hours of 7:00 AM to 11:00 AM.
     * @var HourRange
     */
    public $Hour;

    /**
     * The percent amount by which to adjust the base bid if the current time is within the range of hours being targeted.
     * @var IncrementalBidPercentage
     */
    public $IncrementalBid;
}
