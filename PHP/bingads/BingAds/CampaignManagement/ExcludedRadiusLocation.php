<?php

namespace BingAds\CampaignManagement;

/**
 * Defines a geographical location and the area surrounding it to exclude.
 * @link http://msdn.microsoft.com/en-us/library/jj604415(v=msads.80).aspx ExcludedRadiusLocation Data Object
 */
final class ExcludedRadiusLocation
{
    /**
     * For future use.
     * @var long
     */
    public $Id;

    /**
     * The latitude, in degrees, of the geographical location.
     * @var double
     */
    public $LatitudeDegrees;

    /**
     * The longitude, in degrees, of the geographical location.
     * @var double
     */
    public $LongitudeDegrees;

    /**
     * The name of the geographical location being excluded. The name can contain a maximum of 50 characters.
     * @var string
     */
    public $Name;

    /**
     * The radius, in miles, that specifies the area surrounding the geographical location to exclude.
     * @var int
     */
    public $Radius;
}
