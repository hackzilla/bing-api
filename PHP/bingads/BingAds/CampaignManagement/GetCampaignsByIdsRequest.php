<?php

namespace BingAds\CampaignManagement;

/**
 * Gets the specified campaigns from the specified account.
 * @link http://msdn.microsoft.com/en-us/library/bb671550(v=MSADS.80).aspx GetCampaignsByIdsRequest Request Object
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
