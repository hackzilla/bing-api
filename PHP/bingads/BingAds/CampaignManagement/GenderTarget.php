<?php

namespace BingAds\CampaignManagement;

/**
 * Defines a list of genders to target with bid adjustments.
 * @link http://msdn.microsoft.com/en-us/library/bb671655(v=msads.80).aspx GenderTarget Data Object
 */
final class GenderTarget
{
    /**
     * An array of GenderTargetBid objects that specifies the genders to target and the bid adjustment percentages to apply to the base bid.
     * @var GenderTargetBid[]
     */
    public $Bids;
}
