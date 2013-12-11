<?php

namespace BingAds\CampaignManagement;

/**
 * Defines a text ad.
 * @link http://msdn.microsoft.com/en-us/library/bb672081(v=msads.90).aspx TextAd Data Object
 */
final class TextAd extends Ad
{
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
