<?php

namespace BingAds\CampaignManagement;

/**
 * Defines a specific geographical radius target with bid adjustment.
 * @link http://msdn.microsoft.com/en-us/library/dd796863(v=msads.90).aspx RadiusTargetBid Data Object
 */
final class RadiusTargetBid
{
    /**
     * The percent amount by which to adjust the base bid if the user is in the targeted geographical location radius.
     * @var int
     */
    public $BidAdjustment;

    /**
     * Reserved for future use.
     * @var long
     */
    public $Id;

    /**
     * Reserved for future use.
     * @var boolean
     */
    public $IsExcluded;

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
