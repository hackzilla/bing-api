<?php

namespace BingAds\CampaignManagement;

/**
 * Available for members of the Call Ad Extension v2 pilot program. Call ad extensions are available in the US and UK markets.
 * @link http://msdn.microsoft.com/en-us/library/jj721598(v=msads.80).aspx CallAdExtension Data Object
 */
final class CallAdExtension extends AdExtension2
{
    /**
     * The country code where the phone number is registered. The country code must contain a 2 character country code.
     * @var string
     */
    public $CountryCode;

    /**
     * A Boolean value that determines whether the phone number is the only clickable item in the ad. If true and the ad is displayed on a hi-fi mobile device, all otherwise clickable items such as addresses, the display URL, and site links will be disabled.
     * @var boolean
     */
    public $IsCallOnly;

    /**
     * A Boolean value that determines whether call tracking is enabled for the call ad extension.
     * @var boolean
     */
    public $IsCallTrackingEnabled;

    /**
     * The phone number to include in the ad. The phone number is clickable on hi-fi mobile devices.
     * @var string
     */
    public $PhoneNumber;

    /**
     * A Boolean value that determines whether a toll-free tracking number should be created for call tracking. This element can only be set if IsCallTrackingEnabled is also true.
     * @var boolean
     */
    public $RequireTollFreeTrackingNumber;
}
