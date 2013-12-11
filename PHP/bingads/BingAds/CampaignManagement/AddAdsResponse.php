<?php

namespace BingAds\CampaignManagement;

/**
 * Response object for the AddAds service operation.
 * @link http://msdn.microsoft.com/en-us/library/bb672045(v=MSADS.80).aspx AddAdsResponse Response Object
 */
final class AddAdsResponse
{
    /**
     * An array of long values that represents the identifiers for the ads that were added.
     * @var long[]
     */
    public $AdIds;
}
