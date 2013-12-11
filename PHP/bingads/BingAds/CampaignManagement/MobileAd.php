<?php

namespace BingAds\CampaignManagement;

/**
 * Defines a mobile ad. A mobile ad is displayed to a user when the ad is viewed on a low-fi mobile device.
 * @link http://msdn.microsoft.com/en-us/library/cc512741(v=msads.80).aspx MobileAd Data Object
 */
final class MobileAd extends Ad
{
    /**
     * The name of the business being advertised. The name can contain a maximum of 20 characters.
     * @var string
     */
    public $BusinessName;

    /**
     * The URL of the webpage to take the user to when they click the ad.
     * @var string
     */
    public $DestinationUrl;

    /**
     * The URL to display in the ad.
     * @var string
     */
    public $DisplayUrl;

    /**
     * The phone number to dial when the user clicks the ad. The phone number can contain a maximum of 20 characters. For more information about phone number validation, see Remarks.
     * @var string
     */
    public $PhoneNumber;

    /**
     * The ad copy. The copy must contain at least one word. The ad's copy and title combined must total at least three words.
     * @var string
     */
    public $Text;

    /**
     * The title of the ad. The title must contain at least one word. The ad's copy and title combined must total at least three words.
     * @var string
     */
    public $Title;
}
