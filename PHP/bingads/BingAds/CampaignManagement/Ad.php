<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the base object of an ad.
 * @link http://msdn.microsoft.com/en-us/library/bb671952(v=msads.90).aspx Ad Data Object
 */
class Ad
{
    /**
     * This element determines whether the preference is for text ads to be displayed on mobile devices or all devices.
     * @var long
     */
    public $DevicePreference;

    /**
     * The editorial review status of the ad, which indicates whether the ad is pending review, has been approved, or has been disapproved.
     * @var AdEditorialStatus
     */
    public $EditorialStatus;

    /**
     * The list of key and value strings for forward compatibility. This element can be used to avoid otherwise breaking changes when new elements are added in future releases.
     */
    public $ForwardCompatibilityMap;

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
