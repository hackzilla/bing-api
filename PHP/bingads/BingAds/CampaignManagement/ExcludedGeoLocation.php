<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the geographical location to exclude.
 * @link http://msdn.microsoft.com/en-us/library/jj604416(v=msads.80).aspx ExcludedGeoLocation Data Object
 */
final class ExcludedGeoLocation
{
    /**
     * The location code that identifies the geographical location to exclude. For example, to exclude the state of California in the U.S., set LocationName to 'US-CA'.
     * @var string
     */
    public $LocationName;

    /**
     * The location's type. For possible values, see GeoLocationType.
     * @var GeoLocationType
     */
    public $LocationType;
}
