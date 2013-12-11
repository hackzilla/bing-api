<?php

namespace BingAds\CampaignManagement;

/**
 * Defines a day of the week to target and the percentage used to adjust the base bid.
 * @link http://msdn.microsoft.com/en-us/library/bb671920(v=msads.80).aspx DayTargetBid Data Object
 */
final class DayTargetBid
{
    /**
     * The day of the week to target. For example, you can target the ads to run only on Friday and Saturday.
     * @var Day
     */
    public $Day;

    /**
     * The percent amount by which to adjust the base bid if today is the day of the week being targeted.
     * @var IncrementalBidPercentage
     */
    public $IncrementalBid;
}
