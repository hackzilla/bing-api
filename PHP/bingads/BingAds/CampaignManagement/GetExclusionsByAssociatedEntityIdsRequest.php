<?php

namespace BingAds\CampaignManagement;

/**
 * Gets the specified exclusions from the specified list of entities.
 * @link http://msdn.microsoft.com/en-us/library/jj622434(v=MSADS.80).aspx GetExclusionsByAssociatedEntityIdsRequest Request Object
 */
final class GetExclusionsByAssociatedEntityIdsRequest
{
    /**
     * A list of entities to get the exclusions from. You can specify a maximum of 255 entities.
     * @var Entity[]
     */
    public $Entities;

    /**
     * The types of exclusions to get from the specified entities. You can specify one or more exclusion types.
     * @var ExclusionType
     */
    public $ExclusionType;

    /**
     * The version of the location codes to return if the exclusion contains location targets. The following are the possible values. If null, the default is the oldest supported version.
     * @var string
     */
    public $LocationTargetVersion;
}
