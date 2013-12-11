<?php

namespace BingAds\CampaignManagement;

/**
 * Defines an object that specifies the type of ad rotation to apply to the ad group.
 * @link http://msdn.microsoft.com/en-us/library/jj219952(v=msads.80).aspx AdRotation Data Object
 */
final class AdRotation
{
    /**
     * For future use only. Must be null.
     * @var dateTime
     */
    public $EndDate;

    /**
     * For future use only. Must be null.
     * @var dateTime
     */
    public $StartDate;

    /**
     * The type of ad rotation to apply to the ad group. For possible values, see AdRotationType.
     * @var AdRotationType
     */
    public $Type;
}
