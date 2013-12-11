<?php

namespace BingAds\CampaignManagement;

/**
 * Pauses one or more keywords.
 * @link http://msdn.microsoft.com/en-us/library/bb671504(v=MSADS.80).aspx PauseKeywordsRequest Request Object
 */
final class PauseKeywordsRequest
{
    /**
     * The identifier of the ad group that contains the keywords that will be paused.
     * @var long
     */
    public $AdGroupId;

    /**
     * An array of identifiers that identifies the keywords that will be paused.
     * @var long[]
     */
    public $KeywordIds;
}
