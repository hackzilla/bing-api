<?php

namespace BingAds\CampaignManagement;

/**
 * Gets the destination URL of one or more keywords.
 * @link http://msdn.microsoft.com/en-us/library/jj643308(v=MSADS.80).aspx GetDestinationUrlByKeywordIdsRequest Request Object
 */
final class GetDestinationUrlByKeywordIdsRequest
{
    /**
     * The identifier of the ad group that contains the keywords.
     * @var long
     */
    public $AdGroupId;

    /**
     * A list of unique keyword identifiers. The list can contain a maximum of 1,000 identifiers.
     * @var long[]
     */
    public $KeywordIds;
}
