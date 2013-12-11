<?php

namespace BingAds\CampaignManagement;

/**
 * Defines a radius location target that identifies a geographical location to exclude.
 * @link http://msdn.microsoft.com/en-us/library/jj604419(v=msads.80).aspx ExcludedRadiusTarget Data Object
 */
final class ExcludedRadiusTarget
{
    /**
     * The geographical location and area surrounding the location to exclude.
     * @var ExcludedRadiusLocation[]
     */
    public $ExcludedRadiusLocations;
}
