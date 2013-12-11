<?php

namespace BingAds\CampaignManagement;

/**
 * Retrieves the keywords for an ad group.
 * @link http://msdn.microsoft.com/en-us/library/dn236311(v=msads.90).aspx GetKeywordsByAdGroupIdRequest Request Object
 */
final class GetKeywordsByAdGroupIdRequest
{
    /**
     * The identifier of the ad group that keywords are returned for.
     * @var long
     */
    public $AdGroupId;
}
