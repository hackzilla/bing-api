<?php

namespace BingAds\CampaignManagement;

/**
 * Defines an object that can contain different types geographical targets, for example lists of city and state targets.To download an XML document that contains the DMA? location targeting codes, click here, and then right-click on DMAGeoLocations and select Download.
 * @link http://msdn.microsoft.com/en-us/library/bb671646(v=msads.90).aspx LocationTarget Data Object
 */
final class LocationTarget
{
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
}
