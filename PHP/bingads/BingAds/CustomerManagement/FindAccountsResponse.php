<?php

namespace BingAds\CustomerManagement;

/**
 * Response object for the FindAccounts service operation.
 * @link http://msdn.microsoft.com/en-us/library/hh311376(v=MSADS.80).aspx FindAccountsResponse Response Object
 */
final class FindAccountsResponse
{
    /**
     * A list of AccountInfo objects of the accounts that match the specified filter criteria.
     * @var AccountInfo[]
     */
    public $AccountsInfo;
}
