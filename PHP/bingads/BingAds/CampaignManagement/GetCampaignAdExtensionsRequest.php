<?php

namespace BingAds\CampaignManagement;

/**
 * This version of ad extensions will no longer be supported beginning early Q3 2013. If you implemented this feature, you must migrate your application to use version 2 of ad extensions by early Q3 2013. For information about implementing version 2 of ad extensions, see Ad Extensions.
 * @link http://msdn.microsoft.com/en-us/library/hh527711(v=MSADS.80).aspx GetCampaignAdExtensionsRequest Request Object
 */
final class GetCampaignAdExtensionsRequest
{
    /**
     * The identifier of the account that owns the campaigns.
     * @var long
     */
    public $AccountId;

    /**
     * A list of identifiers of the campaigns whose address and phone preferences you want to get. You can specify a maximum of 100 identifiers.
     * @var long[]
     */
    public $CampaignIds;
}
