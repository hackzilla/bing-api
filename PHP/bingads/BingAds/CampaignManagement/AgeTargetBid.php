<?php

namespace BingAds\CampaignManagement;

/**
 * Defines a specific age target range with bid adjustment.
 * @link http://msdn.microsoft.com/en-us/library/bb671720(v=msads.80).aspx AgeTargetBid Data Object
 */
final class AgeTargetBid
{
    /**
     * The age range to target. For information about how age targeting works compared to other target types, see the Remarks section of the Target data object.
     * @var AgeRange
     */
    public $Age;

    /**
     * The percent amount used to adjust the base bid.
     * @var IncrementalBidPercentage
     */
    public $IncrementalBid;
}
