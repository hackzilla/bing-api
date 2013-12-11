<?php

namespace BingAds\CampaignManagement;

/**
 * Response object for the GetBMCStoresByCustomerId service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn411607(v=msads.90).aspx GetBMCStoresByCustomerIdResponse Response Object
 */
final class GetBMCStoresByCustomerIdResponse
{
    /**
     * The list of Bing Merchant Center stores for the specified customer.
     * @var BMCStore[]
     */
    public $BMCStores;
}
