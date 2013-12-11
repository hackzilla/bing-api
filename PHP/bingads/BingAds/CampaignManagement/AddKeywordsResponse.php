<?php

namespace BingAds\CampaignManagement;

/**
 * Response object for the AddKeywords service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn277513(v=msads.90).aspx AddKeywordsResponse Response Object
 */
final class AddKeywordsResponse
{
    /**
     * An list of long values that represents the keyword identifiers for the keywords that were added.
     * @var long[]
     */
    public $KeywordIds;

    /**
     * An array of BatchError objects that contain details for any keywords that were not successfully added.
     * @var BatchError[]
     */
    public $PartialErrors;
}
