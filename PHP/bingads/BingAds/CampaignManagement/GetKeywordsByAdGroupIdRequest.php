<?php

namespace BingAds\CampaignManagement;

/**
 * Gets the keywords for an ad group.
 * @link http://msdn.microsoft.com/en-us/library/bb671693(v=MSADS.80).aspx GetKeywordsByAdGroupIdRequest Request Object
 */
final class GetKeywordsByAdGroupIdRequest
{
    /**
     * The identifier of the ad group that keywords are returned for.
     * @var long
     */
    public $AdGroupId;
}
