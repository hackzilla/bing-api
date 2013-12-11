<?php

namespace BingAds\CampaignManagement;

/**
 * Defines a list of state targets with bid adjustments.
 * @link http://msdn.microsoft.com/en-us/library/dd796793(v=msads.80).aspx StateTarget Data Object
 */
final class StateTarget
{
    /**
     * An array of StateTargetBid objects that specifies the states/provinces/territories to target and the bid adjustment percentages to apply to the base bid. You can specify a maximum of 255 bids.
     * @var StateTargetBid[]
     */
    public $Bids;
}
