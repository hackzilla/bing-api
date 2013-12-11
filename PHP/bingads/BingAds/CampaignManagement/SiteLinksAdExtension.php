<?php

namespace BingAds\CampaignManagement;

/**
 * Defines an ad extension that specifies one or more site links to add to a text ad.The SiteLinksAdExtension object derives from the AdExtension object. For a list of inherited elements, see the AdExtension object.
 * @link http://msdn.microsoft.com/en-us/library/jj134387(v=msads.90).aspx SiteLinksAdExtension Data Object
 */
final class SiteLinksAdExtension extends AdExtension
{
    /**
     * A list of site links. Each object contains a link to a webpage on your website. You can specify a maximum of 10 site links. The search engine determines which links to include in the ad.
     * @var SiteLink[]
     */
    public $SiteLinks;
}
