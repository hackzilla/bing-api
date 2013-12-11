<?php

namespace BingAds\CampaignManagement;

/**
 * Defines a metropolitan area to target and the percentage used to adjust the base bid.
 * @link http://msdn.microsoft.com/en-us/library/bb672080(v=msads.80).aspx MetroAreaTargetBid Data Object
 */
final class MetroAreaTargetBid
{
    /**
     * The percent amount by which to adjust the base bid if the user is in the targeted metropolitan area.
     * @var IncrementalBidPercentage
     */
    public $IncrementalBid;

    /**
     * The metropolitan area to target.
     * @var string
     */
    public $MetroArea;
}
