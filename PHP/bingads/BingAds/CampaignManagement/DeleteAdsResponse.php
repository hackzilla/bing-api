<?php

namespace BingAds\CampaignManagement;

/**
 * Response object for the DeleteAds service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn236310(v=msads.90).aspx DeleteAdsResponse Response Object
 */
final class DeleteAdsResponse
{
    /**
     * An array of BatchError objects that contain details for any ads that were not successfully deleted.
     * @var BatchError[]
     */
    public $PartialErrors;
}
