<?php

namespace BingAds\CampaignManagement;

/**
 * Defines a list of days to target with bid adjustments.
 * @link http://msdn.microsoft.com/en-us/library/bb671942(v=msads.80).aspx DayTarget Data Object
 */
final class DayTarget
{
    /**
     * An array of DayTargetBid objects that specifies the days of the week to target and the bid adjustment percentages to apply to the base bid.
     * @var DayTargetBid[]
     */
    public $Bids;

    /**
     * Determines whether to participate in auctions only on the days of the week that you specified or to participate on all days of the week.
     * @var boolean
     */
    public $TargetAllDays;
}
