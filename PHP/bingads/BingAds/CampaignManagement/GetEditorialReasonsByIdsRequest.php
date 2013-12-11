<?php

namespace BingAds\CampaignManagement;

/**
 * Gets the reasons why the specified entities failed editorial review and whether the rejection is appealable.
 * @link http://msdn.microsoft.com/en-us/library/jj631647(v=MSADS.80).aspx GetEditorialReasonsByIdsRequest Request Object
 */
final class GetEditorialReasonsByIdsRequest
{
    /**
     * The identifier of the account that contains the specified entities.
     * @var long
     */
    public $AccountId;

    /**
     * A list of unique identifiers that identifies the ads or keywords that failed editorial review. The list must include all ads or all keywords - the list cannot include a mix ads and keywords. The list can contain a maximum of 1,000 identifiers.
     * @var long[]
     */
    public $EntityIds;

    /**
     * The type of entities that the entity list contains.
     * @var EntityType
     */
    public $EntityType;
}
