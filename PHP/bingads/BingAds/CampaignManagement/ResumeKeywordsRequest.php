<?php

namespace BingAds\CampaignManagement;

/**
 * Resumes one or more keywords.
 * @link http://msdn.microsoft.com/en-us/library/bb671976(v=MSADS.80).aspx ResumeKeywordsRequest Request Object
 */
final class ResumeKeywordsRequest
{
    /**
     * The identifier of the ad group that contains the keywords to be resumed.
     * @var long
     */
    public $AdGroupId;

    /**
     * An array of identifiers that identifies the keywords be resumed.
     * @var long[]
     */
    public $KeywordIds;
}
