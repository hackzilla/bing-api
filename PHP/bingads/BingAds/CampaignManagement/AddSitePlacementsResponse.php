<?php

namespace BingAds\CampaignManagement;

/**
 * Response object for the AddSitePlacements service operation.
 * @link http://msdn.microsoft.com/en-us/library/dd796809(v=MSADS.80).aspx AddSitePlacementsResponse Response Object
 */
final class AddSitePlacementsResponse
{
    /**
     * The identifiers of the website placement bids that were added.
     * @var long[]
     */
    public $SitePlacementIds;
}
