<?php

namespace BingAds\CampaignManagement;

/**
 * Response object for the GetSitePlacementsByAdGroupId service operation.
 * @link http://msdn.microsoft.com/en-us/library/dd797116(v=MSADS.80).aspx GetSitePlacementsByAdGroupIdResponse Response Object
 */
final class GetSitePlacementsByAdGroupIdResponse
{
    /**
     * An array of SitePlacement objects that was successfully retrieved. If no website placements are retrieved, this array is empty.
     * @var SitePlacement[]
     */
    public $SitePlacements;
}
