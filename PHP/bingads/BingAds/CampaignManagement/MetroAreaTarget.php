<?php

namespace BingAds\CampaignManagement;

/**
 * Defines a list of metro area targets with bid adjustments.
 * @link http://msdn.microsoft.com/en-us/library/bb671815(v=msads.80).aspx MetroAreaTarget Data Object
 */
final class MetroAreaTarget
{
    /**
     * An array of MetroAreaTargetBid objects that specifies the metropolitan areas to target and the bid adjustment percentages to apply to the base bid. You can specify a maximum of 255 bids.
     * @var MetroAreaTargetBid[]
     */
    public $Bids;
}
