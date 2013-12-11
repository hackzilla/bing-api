<?php

namespace BingAds\CampaignManagement;

/**
 * Deletes one or more keywords in a specified ad group.
 * @link http://msdn.microsoft.com/en-us/library/bb671744(v=MSADS.80).aspx DeleteKeywordsRequest Request Object
 */
final class DeleteKeywordsRequest
{
    /**
     * The identifier of the ad group that contains the keywords to delete.
     * @var long
     */
    public $AdGroupId;

    /**
     * A maximum of 1,000 keywords identifiers to delete. After deleting a keyword, you cannot access the object by using any Get operation, such as GetKeywordsByIds.
     * @var long[]
     */
    public $KeywordIds;
}
