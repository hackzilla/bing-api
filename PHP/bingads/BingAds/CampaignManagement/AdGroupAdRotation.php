<?php

namespace BingAds\CampaignManagement;

/**
 * Defines an object that specifies the type of ad rotation to apply to the specified ad group.
 * @link http://msdn.microsoft.com/en-us/library/jj219950(v=msads.80).aspx AdGroupAdRotation Data Object
 */
final class AdGroupAdRotation
{
    /**
     * The identifier of the ad group.
     * @var long
     */
    public $AdGroupId;

    /**
     * The type of ad rotation to apply to the ad group. If null, the rotation defaults to OptimizeForClicks.
     * @var AdRotation
     */
    public $AdRotation;
}
