<?php

namespace BingAds\CampaignManagement;

/**
 * Defines a gender to target and the percentage used to adjust the base bid.
 * @link http://msdn.microsoft.com/en-us/library/bb671554(v=msads.80).aspx GenderTargetBid Data Object
 */
final class GenderTargetBid
{
    /**
     * The gender to target. For information about how gender targeting works compared to other target types, see the Remarks section of the Target data object.
     * @var GenderType
     */
    public $Gender;

    /**
     * The percent amount by which to adjust the base bid.
     * @var IncrementalBidPercentage
     */
    public $IncrementalBid;
}
