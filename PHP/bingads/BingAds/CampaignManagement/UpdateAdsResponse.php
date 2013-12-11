<?php

namespace BingAds\CampaignManagement;

/**
 * Response object for the UpdateAds service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn277531(v=msads.90).aspx UpdateAdsResponse Response Object
 */
final class UpdateAdsResponse
{
    /**
     * An array of BatchError objects that contain details for any ads that were not successfully updated.
     * @var BatchError[]
     */
    public $PartialErrors;
}
