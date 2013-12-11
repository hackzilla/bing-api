<?php

namespace BingAds\CampaignManagement;

/**
 * Retrieves detailed information about the targets that are associated with the specified campaigns.
 * @link http://msdn.microsoft.com/en-us/library/dn236300(v=msads.90).aspx GetTargetsByCampaignIdsRequest Request Object
 */
final class GetTargetsByCampaignIdsRequest
{
    /**
     * A list of identifiers of the campaigns that contain the targets that you want to get. The list can contain a maximum of 100 identifiers.
     * @var long[]
     */
    public $CampaignIds;

    /**
     * The version of the location codes to return if the target contains location targets. The following are the possible values. If null, the default is the oldest supported version.
     * @var string
     */
    public $LocationTargetVersion;
}
