<?php

namespace BingAds\CampaignManagement;

/**
 * Response object for the AddAds service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn277506(v=msads.90).aspx AddAdsResponse Response Object
 */
final class AddAdsResponse
{
    /**
     * A list of long values that represents the identifiers for the ads that were added.
     * @var long[]
     */
    public $AdIds;

    /**
     * An array of BatchError objects that contain details for any ads that were not successfully added.
     * @var BatchError[]
     */
    public $PartialErrors;
}
