<?php

namespace BingAds\CampaignManagement;

/**
 * Retrieves the specified website-placement bids from the specified ad group.
 * @link http://msdn.microsoft.com/en-us/library/dn277539(v=msads.90).aspx GetSitePlacementsByIdsRequest Request Object
 */
final class GetSitePlacementsByIdsRequest
{
    /**
     * The identifier of the ad group that contains the website placement bids to be retrieved.
     * @var long
     */
    public $AdGroupId;

    /**
     * An array of identifiers that identifies the website placement bids to be retrieved.
     * @var long[]
     */
    public $SitePlacementIds;
}
