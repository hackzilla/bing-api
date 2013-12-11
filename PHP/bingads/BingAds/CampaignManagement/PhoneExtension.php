<?php

namespace BingAds\CampaignManagement;

/**
 * This version of call ad extensions will no longer be supported beginning early Q3 2013. If you implemented this version, you must migrate your application to use version 2 of call ad extensions by early Q3 2013. For information about working with version 2 of call ad extensions, see Ad Extensions.
 * @link http://msdn.microsoft.com/en-us/library/hh527703(v=msads.80).aspx PhoneExtension Data Object
 */
final class PhoneExtension
{
    /**
     * The country to which the phone number applies. Possible values are:
     * @var string
     */
    public $Country;

    /**
     * Determines whether the phone number in this object is the only clickable item in the ad (does not apply to the phone number specified in the business target). If true, the display URL link in the ad is disabled if the ad is displayed on a hi-fi mobile device.
     * @var boolean
     */
    public $EnableClickToCallOnly;

    /**
     * Determines whether to override the phone number specified in the business target with the phone number specified in the Phone element. To override the phone number in the business target, set this element to true.
     * @var boolean
     */
    public $EnablePhoneExtension;

    /**
     * The phone number to use in place of the phone number specified in the business target. The phone number can contain a maximum of 20 characters.
     * @var string
     */
    public $Phone;
}
