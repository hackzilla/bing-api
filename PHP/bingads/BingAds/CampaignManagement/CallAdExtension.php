<?php

namespace BingAds\CampaignManagement;

/**
 * Available for members of the Call Ad Extension v2 pilot program. Call ad extensions are available in the US and UK markets.Defines an object that specifies a click-to-call phone number to include in a text ad.The CallAdExtension object derives from the AdExtension object. For a list of inherited elements, see the AdExtension object.
 * @link http://msdn.microsoft.com/en-us/library/jj721598(v=msads.90).aspx CallAdExtension Data Object
 */
final class CallAdExtension extends AdExtension
{
    /**
     * The country code where the phone number is registered. The country code must contain a 2 character country code. For a list of possible country codes that you can specify, see Publisher Country.
     * @var string
     */
    public $CountryCode;

    /**
     * This element determines whether the preference is for the click to call phone number to be displayed on mobile devices or all devices.
     * @var long
     */
    public $DevicePreference;

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
