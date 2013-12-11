<?php

namespace BingAds\CampaignManagement;

/**
 * Appeals the editorial rejections of one or more ads or keywords that failed editorial review.
 * @link http://msdn.microsoft.com/en-us/library/dn277533(v=msads.90).aspx AppealEditorialRejectionsRequest Request Object
 */
final class AppealEditorialRejectionsRequest
{
    /**
     * A list of unique identifiers of the ads or keywords that failed editorial review. The list must include all ads or all keywords - the list cannot include a mix ads and keywords. The list can contain a maximum of 1,000 identifiers.
     * @var long[]
     */
    public $EntityIds;

    /**
     * The type of entities that the entity list contains.
     * @var EntityType
     */
    public $EntityType;

    /**
     * The justification for the appeal. The string can contain a maximum of 1,000 characters. The justification applies to all of the specified entities.
     * @var string
     */
    public $JustificationText;
}
