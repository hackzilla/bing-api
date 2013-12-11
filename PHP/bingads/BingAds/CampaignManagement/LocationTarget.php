<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the geographical location targets.
 * @link http://msdn.microsoft.com/en-us/library/bb671646(v=msads.80).aspx LocationTarget Data Object
 */
final class LocationTarget
{
    /**
     * The business locations to target.
     * @var BusinessTarget
     */
    public $BusinessTarget;

    /**
     * The cities to target.
     * @var CityTarget
     */
    public $CityTarget;

    /**
     * The countries/regions to target.
     * @var CountryTarget
     */
    public $CountryTarget;

    /**
     * Determines whether the user must be physically located in the targeted location in order for the ad to display. If true, the user must be physically present in the targeted location. The default is false.
     * @var boolean
     */
    public $HasPhysicalIntent;

    /**
     * The metropolitan areas to target.
     * @var MetroAreaTarget
     */
    public $MetroAreaTarget;

    /**
     * The geographical locations to target.
     * @var RadiusTarget
     */
    public $RadiusTarget;

    /**
     * The states, provinces, or territories to target.
     * @var StateTarget
     */
    public $StateTarget;

    /**
     * Determines whether to participate in auctions only when the user is in the locations that you specified or to participate when the user is in any location.
     * @var boolean
     */
    public $TargetAllLocations;
}
