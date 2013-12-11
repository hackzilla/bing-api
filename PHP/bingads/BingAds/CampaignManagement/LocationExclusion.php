<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the location exclusions to apply to a target entity.
 * @link http://msdn.microsoft.com/en-us/library/jj636731(v=msads.80).aspx LocationExclusion Data Object
 */
final class LocationExclusion extends Exclusion
{
    /**
     * A list of geographical locations to exclude. You can specify a maximum of 255 targets.
     * @var ExcludedGeoLocation[]
     */
    public $ExcludedGeoTargets;

    /**
     * For future use.
     * @var ExcludedRadiusTarget
     */
    public $ExcludedRadiusTarget;
}
