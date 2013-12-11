<?php

namespace BingAds\CampaignManagement;

/**
 * Gets the reasons why the specified keywords failed editorial review.
 * @link http://msdn.microsoft.com/en-us/library/ff728472(v=MSADS.80).aspx GetKeywordEditorialReasonsByIdsRequest Request Object
 */
final class GetKeywordEditorialReasonsByIdsRequest
{
    /**
     * An array of identifiers that identifies keywords that failed editorial review. The array can have a maximum of 1,000 identifiers.
     * @var long[]
     */
    public $KeywordIds;

    /**
     * The identifier of the account that contains the keywords.
     * @var long
     */
    public $AccountId;
}
