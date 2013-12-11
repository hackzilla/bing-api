<?php

namespace BingAds\CampaignManagement;

/**
 * Defines a list of countries or regions to target with bid adjustments.
 * @link http://msdn.microsoft.com/en-us/library/bb671605(v=msads.80).aspx CountryTarget Data Object
 */
final class CountryTarget
{
    /**
     * An array of CountryTargetBid objects that specifies the countries/regions to target and the bid adjustment percentages to apply to the base bid. You can specify a maximum of 255 bids.
     * @var CountryTargetBid[]
     */
    public $Bids;
}
