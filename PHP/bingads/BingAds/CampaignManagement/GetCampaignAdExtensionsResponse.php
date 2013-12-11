<?php

namespace BingAds\CampaignManagement;

/**
 * Response object for the GetCampaignAdExtensions service operation.
 * @link http://msdn.microsoft.com/en-us/library/hh527711(v=MSADS.80).aspx GetCampaignAdExtensionsResponse Response Object
 */
final class GetCampaignAdExtensionsResponse
{
    /**
     * A list of AdExtension objects that contains the campaign's preferences for whether to include the business' address and phone number in its text ads.
     * @var AdExtension[]
     */
    public $AdExtensions;
}
