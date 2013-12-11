<?php

namespace BingAds\CampaignManagement;

/**
 * Defines a geographical location to target and the percentage used to adjust the base bid.
 * @link http://msdn.microsoft.com/en-us/library/dd796863(v=msads.80).aspx RadiusTargetBid Data Object
 */
final class RadiusTargetBid
{
    /**
     * For future use.
     * @var long
     */
    public $Id;

    /**
     * The percent amount by which to adjust the base bid if the user is within the specified radius of the geographical location.
     * @var IncrementalBidPercentage
     */
    public $IncrementalBid;

    /**
     * The latitude, in degrees, of the target location.
     * @var double
     */
    public $LatitudeDegrees;

    /**
     * The longitude, in degrees, of the target location.
     * @var double
     */
    public $LongitudeDegrees;

    /**
     * The name of the geographical location being targeted. The name can contain a maximum of 50 characters.
     * @var string
     */
    public $Name;

    /**
     * The radius, in miles, that specifies the area surrounding the geographical location to target.
     * @var int
     */
    public $Radius;
}
