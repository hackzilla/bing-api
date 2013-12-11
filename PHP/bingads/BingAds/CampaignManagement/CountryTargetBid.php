<?php

namespace BingAds\CampaignManagement;

/**
 * Defines a country to target and the percentage used to adjust the base bid.
 * @link http://msdn.microsoft.com/en-us/library/bb671882(v=msads.80).aspx CountryTargetBid Data Object
 */
final class CountryTargetBid
{
    /**
     * The country to target.
     * @var string
     */
    public $CountryAndRegion;

    /**
     * The percent amount by which to adjust the base bid if the user is in the targeted country/region.
     * @var IncrementalBidPercentage
     */
    public $IncrementalBid;
}
