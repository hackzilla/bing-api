<?php

namespace BingAds\CampaignManagement;

/**
 * Response object for the GetSitePlacementsByIds service operation.
 * @link http://msdn.microsoft.com/en-us/library/dd796904(v=MSADS.80).aspx GetSitePlacementsByIdsResponse Response Object
 */
final class GetSitePlacementsByIdsResponse
{
    /**
     * An array of SitePlacement objects that was successfully retrieved. If no website placements are retrieved, this array is empty.
     * @var SitePlacement[]
     */
    public $SitePlacements;
}
