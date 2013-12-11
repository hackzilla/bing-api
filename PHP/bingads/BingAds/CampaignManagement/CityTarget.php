<?php

namespace BingAds\CampaignManagement;

/**
 * Defines a list of cities to target with bid adjustments.
 * @link http://msdn.microsoft.com/en-us/library/dd796959(v=msads.80).aspx CityTarget Data Object
 */
final class CityTarget
{
    /**
     * An array of CityTargetBid objects that specifies the cities to target and the bid adjustment percentages to apply to the base bid. You can specify a maximum of 255 bids.
     * @var CityTargetBid[]
     */
    public $Bids;
}
