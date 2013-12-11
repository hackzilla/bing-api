<?php

namespace BingAds\CampaignManagement;

/**
 * Response object for the DeleteKeywords service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn236318(v=msads.90).aspx DeleteKeywordsResponse Response Object
 */
final class DeleteKeywordsResponse
{
    /**
     * An array of BatchError objects that contain details for any keywords that were not successfully deleted.
     * @var BatchError[]
     */
    public $PartialErrors;
}
