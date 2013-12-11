<?php

namespace BingAds\CampaignManagement;

/**
 * Defines a site link to include in an ad. The link should take the user to content in your website that is relevant in the context of the ad.
 * @link http://msdn.microsoft.com/en-us/library/jj134381(v=msads.90).aspx SiteLink Data Object
 */
final class SiteLink
{
    /**
     * The URL of the webpage that users are taken to when they click the site link. The URL can contain a maximum of 1,024 characters.
     * @var string
     */
    public $DestinationUrl;

    /**
     * This element determines whether the preference is for site links to be displayed on mobile devices or all devices.
     * @var long
     */
    public $DevicePreference;

    /**
     * The site-link text displayed in the ad. The text can contain a maximum of 35 characters.
     * @var string
     */
    public $DisplayText;
}
