<?php

namespace BingAds\CampaignManagement;

/**
 * Defines a list of cities to target with bid adjustments.
 * @link http://msdn.microsoft.com/en-us/library/dd796959(v=msads.90).aspx CityTarget Data Object
 */
final class CityTarget
{
    /**
     * An array of cities to target with bid adjustments. You can specify a maximum of 255 bids.
     * @var CityTargetBid[]
     */
    public $Bids;
}
