<?php

namespace BingAds\CampaignManagement;

/**
 * Defines a city to target and the percentage used to adjust the base bid.
 * @link http://msdn.microsoft.com/en-us/library/dd796932(v=msads.80).aspx CityTargetBid Data Object
 */
final class CityTargetBid
{
    /**
     * The city to target.
     * @var string
     */
    public $City;

    /**
     * The percent amount by which to adjust the base bid if the user is in the targeted city.
     * @var IncrementalBidPercentage
     */
    public $IncrementalBid;
}
