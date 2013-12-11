<?php

namespace BingAds\CampaignManagement;

/**
 * Defines a list of age ranges to target with bid adjustments.
 * @link http://msdn.microsoft.com/en-us/library/bb672084(v=msads.80).aspx AgeTarget Data Object
 */
final class AgeTarget
{
    /**
     * An array of AgeTargetBid objects that specifies the age ranges to target and the bid adjustment percentages to apply to the base bid.
     * @var AgeTargetBid[]
     */
    public $Bids;
}
