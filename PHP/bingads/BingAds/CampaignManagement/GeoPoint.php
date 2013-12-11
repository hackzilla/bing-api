<?php

namespace BingAds\CampaignManagement;

/**
 * Defines an object that contains the longitude and latitude coordinates of a geographical location.
 * @link http://msdn.microsoft.com/en-us/library/jj721599(v=msads.90).aspx GeoPoint Data Object
 */
final class GeoPoint
{
    /**
     * The latitude specified in micro degrees. The latitude must be greater than or equal to -85000000 and less than or equal to +85000000.
     * @var int
     */
    public $LatitudeInMicroDegrees;

    /**
     * The longitude specified in micro degrees. The longitude must be greater than or equal to -180000000 and less than or equal to +180000000.
     * @var int
     */
    public $LongitudeInMicroDegrees;
}
