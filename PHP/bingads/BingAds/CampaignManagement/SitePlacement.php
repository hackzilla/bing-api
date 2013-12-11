<?php

namespace BingAds\CampaignManagement;

/**
 * Defines a website placement bid.
 * @link http://msdn.microsoft.com/en-us/library/dd797248(v=msads.90).aspx SitePlacement Data Object
 */
final class SitePlacement
{
    /**
     * The bid for text ad space on the specified publisher's website. This bid overrides the default content match bid of the ad group. To use the default ad group bid value when you add this bid, set this element to null.
     * @var Bid
     */
    public $Bid;

    /**
     * A system-generated identifier that identifies this object.
     * @var long
     */
    public $Id;

    /**
     * The identifier of the publisher website where you want to display your text ads.
     * @var long
     */
    public $PlacementId;

    /**
     * The status of this site placement bid. When you add a site placement bid, its status is Active by default.
     * @var SitePlacementStatus
     */
    public $Status;

    /**
     * The URL of the website where you want your text ads to display. The Url can contain a maximum of 256 characters.
     * @var string
     */
    public $Url;
}
