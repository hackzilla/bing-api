<?php

namespace BingAds\CampaignManagement;

/**
 * Retrieves the specified campaigns from the specified account.
 * @link http://msdn.microsoft.com/en-us/library/dn236303(v=msads.90).aspx GetCampaignsByIdsRequest Request Object
 */
final class GetCampaignsByIdsRequest
{
    /**
     * The identifier of the account that contains the campaigns to get.
     * @var long
     */
    public $AccountId;

    /**
     * A maximum of 100 identifiers of the campaigns to get from the specified account.
     * @var long[]
     */
    public $CampaignIds;
}
