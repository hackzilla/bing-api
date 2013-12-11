<?php

namespace BingAds\CampaignManagement;

/**
 * Response object for the AddKeywords service operation.
 * @link http://msdn.microsoft.com/en-us/library/bb671996(v=MSADS.80).aspx AddKeywordsResponse Response Object
 */
final class AddKeywordsResponse
{
    /**
     * An array of long values that represents the keyword identifiers for the keywords that were added.
     * @var long[]
     */
    public $KeywordIds;
}
