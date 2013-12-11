<?php

namespace BingAds\CampaignManagement;

/**
 * Retrieves detailed information about the specified targets.
 * @link http://msdn.microsoft.com/en-us/library/dn236304(v=msads.90).aspx GetTargetsByIdsRequest Request Object
 */
final class GetTargetsByIdsRequest
{
    /**
     * A list of identifiers of the targets to get. The list can contain a maximum of 100 identifiers.
     * @var long[]
     */
    public $TargetIds;

    /**
     * The version of the location codes to return if the target contains location targets. The following are the possible values. If null, the default is the oldest supported version.
     * @var string
     */
    public $LocationTargetVersion;
}
