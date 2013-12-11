<?php

namespace BingAds\CampaignManagement;

/**
 * Resumes one or more website placements in the specified ad group.
 * @link http://msdn.microsoft.com/en-us/library/dd796924(v=MSADS.80).aspx ResumeSitePlacementsRequest Request Object
 */
final class ResumeSitePlacementsRequest
{
    /**
     * The identifier of the ad group that contains the website placement bids that will be resumed.
     * @var long
     */
    public $AdGroupId;

    /**
     * An array of identifiers that identifies the website placement bids that will be resumed.
     * @var long[]
     */
    public $SitePlacementIds;
}
