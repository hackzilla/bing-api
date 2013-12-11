<?php

namespace BingAds\CampaignManagement;

/**
 * This version of ad extensions will no longer be supported beginning early Q3 2013. If you implemented this feature, you must migrate your application to use version 2 of ad extensions. For information about implementing version 2 of ad extensions, see Ad Extensions.
 * @link http://msdn.microsoft.com/en-us/library/hh527709(v=MSADS.80).aspx SetCampaignAdExtensionsRequest Request Object
 */
final class SetCampaignAdExtensionsRequest
{
    /**
     * The identifier of the account that owns the campaigns.
     * @var long
     */
    public $AccountId;

    /**
     * A list of AdExtension objects that contains the campaign's preferences for whether to include the business' address and phone information in text ads. You can specify a maximum of 100 extension objects, and the list must not contain duplicate campaigns.
     * @var AdExtension[]
     */
    public $AdExtensions;
}
