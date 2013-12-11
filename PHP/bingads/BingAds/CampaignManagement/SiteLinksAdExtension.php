<?php

namespace BingAds\CampaignManagement;

/**
 * Defines an ad extension that specifies one or more site links to add to a text ad. You may associate a site links ad extension with one or more campaigns; however, a campaign can be associated with only one site links ad extension.
 * @link http://msdn.microsoft.com/en-us/library/jj134387(v=msads.80).aspx SiteLinksAdExtension Data Object
 */
final class SiteLinksAdExtension extends AdExtension2
{
    /**
     * A list of SiteLink objects. Each object contains a link to a webpage on your website. You can specify a maximum of 10 site links. The search engine determines which links to include in the ad.
     * @var SiteLink[]
     */
    public $SiteLinks;
}
