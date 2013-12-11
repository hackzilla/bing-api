<?php

namespace BingAds\CampaignManagement;

/**
 * Retrieves detailed information about the targets that are associated with the specified ad groups.
 * @link http://msdn.microsoft.com/en-us/library/dn236297(v=msads.90).aspx GetTargetsByAdGroupIdsRequest Request Object
 */
final class GetTargetsByAdGroupIdsRequest
{
    /**
     * A list of identifiers of the ad groups that contain the targets that you want to get. The list can contain a maximum of 100 identifiers.
     * @var long[]
     */
    public $AdGroupIds;

    /**
     * The version of the location codes to return if the target contains location targets. The following are the possible values. If null, the default is the oldest supported version.
     * @var string
     */
    public $LocationTargetVersion;
}
