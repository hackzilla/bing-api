<?php

namespace BingAds\CampaignManagement;

/**
 * Pauses one or more website placement bids in the specified ad group.
 * @link http://msdn.microsoft.com/en-us/library/dd797162(v=MSADS.80).aspx PauseSitePlacementsRequest Request Object
 */
final class PauseSitePlacementsRequest
{
    /**
     * The identifier of the ad group that contains the website placement bids that will be paused.
     * @var long
     */
    public $AdGroupId;

    /**
     * An array of identifiers that identifies the website placement bids that will be paused.
     * @var long[]
     */
    public $SitePlacementIds;
}
