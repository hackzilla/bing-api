<?php

namespace BingAds\CampaignManagement;

/**
 * Response object for the AddSitePlacements service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn277523(v=msads.90).aspx AddSitePlacementsResponse Response Object
 */
final class AddSitePlacementsResponse
{
    /**
     * The identifiers of the website placement bids that were added.
     * @var long[]
     */
    public $SitePlacementIds;
}
