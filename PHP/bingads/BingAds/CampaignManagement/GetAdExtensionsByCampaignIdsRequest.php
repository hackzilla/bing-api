<?php

namespace BingAds\CampaignManagement;

/**
 * Gets the specified types of ad extensions associated to the specified campaigns.
 * @link http://msdn.microsoft.com/en-us/library/jj134405(v=MSADS.80).aspx GetAdExtensionsByCampaignIdsRequest Request Object
 */
final class GetAdExtensionsByCampaignIdsRequest
{
    /**
     * The identifier of the account that owns the campaigns.
     * @var long
     */
    public $AccountId;

    /**
     * The identifier of the campaigns that contain the ad extensions to get. You can specify a maximum of 100 identifiers.
     * @var long[]
     */
    public $CampaignIds;

    /**
     * The types of ad extensions to get from the campaign.
     * @var AdExtensionsTypeFilter
     */
    public $AdExtensionType;
}
