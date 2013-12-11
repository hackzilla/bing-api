<?php

namespace BingAds\CampaignManagement;

/**
 * Deletes one or more keywords in a specified ad group.
 * @link http://msdn.microsoft.com/en-us/library/dn236318(v=msads.90).aspx DeleteKeywordsRequest Request Object
 */
final class DeleteKeywordsRequest
{
    /**
     * The identifier of the ad group that contains the keywords to delete.
     * @var long
     */
    public $AdGroupId;

    /**
     * A maximum of 1,000 keywords identifiers to delete.
     * @var long[]
     */
    public $KeywordIds;
}
