<?php

namespace BingAds\CampaignManagement;

/**
 * Gets all the website placement bids from the specified ad group.
 * @link http://msdn.microsoft.com/en-us/library/dd797116(v=MSADS.80).aspx GetSitePlacementsByAdGroupIdRequest Request Object
 */
final class GetSitePlacementsByAdGroupIdRequest
{
    /**
     * The identifier of the ad group that contains the website placement bids that will be retrieved.
     * @var long
     */
    public $AdGroupId;
}
