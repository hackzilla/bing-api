<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the base object of an ad.
 * @link http://msdn.microsoft.com/en-us/library/bb671952(v=msads.80).aspx Ad Data Object
 */
class Ad
{
    /**
     * The editorial review status of the ad, which indicates whether the ad is pending review, has been approved, or has been disapproved.
     * @var AdEditorialStatus
     */
    public $EditorialStatus;

    /**
     * The system generated identifier of the ad.
     * @var long
     */
    public $Id;

    /**
     * The status of the ad.
     * @var AdStatus
     */
    public $Status;

    /**
     * The type of the ad. For more information, see Remarks.
     * @var AdType
     */
    public $Type;
}
