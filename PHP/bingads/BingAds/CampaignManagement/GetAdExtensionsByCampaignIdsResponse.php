<?php

namespace BingAds\CampaignManagement;

/**
 * Response object for the GetAdExtensionsByCampaignIds service operation.
 * @link http://msdn.microsoft.com/en-us/library/jj134405(v=MSADS.80).aspx GetAdExtensionsByCampaignIdsResponse Response Object
 */
final class GetAdExtensionsByCampaignIdsResponse
{
    /**
     * A list of CampaignAdExtensionCollection objects. Each collection contains a CampaignAdExtension object for each ad extension type that matches the ad extension filter in the request.
     * @var CampaignAdExtensionCollection[]
     */
    public $CampaignAdExtensionCollection;
}
