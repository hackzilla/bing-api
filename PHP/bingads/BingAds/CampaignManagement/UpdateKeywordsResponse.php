<?php

namespace BingAds\CampaignManagement;

/**
 * Response object for the UpdateKeywords service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn236295(v=msads.90).aspx UpdateKeywordsResponse Response Object
 */
final class UpdateKeywordsResponse
{
    /**
     * An array of BatchError objects that contain details for any keywords that were not successfully updated.
     * @var BatchError[]
     */
    public $PartialErrors;
}
