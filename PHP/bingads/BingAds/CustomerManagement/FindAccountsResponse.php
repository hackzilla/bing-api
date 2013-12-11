<?php

namespace BingAds\CustomerManagement;

/**
 * Response object for the FindAccounts service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn451274(v=msads.90).aspx FindAccountsResponse Response Object
 */
final class FindAccountsResponse
{
    /**
     * A list of AccountInfo objects of the accounts that match the specified filter criteria.
     * @var AccountInfo[]
     */
    public $AccountsInfo;
}
