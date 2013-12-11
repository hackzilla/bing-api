<?php

namespace BingAds\CustomerManagement;

/**
 * Response object for the GetAccountsInfo service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn451289(v=msads.90).aspx GetAccountsInfoResponse Response Object
 */
final class GetAccountsInfoResponse
{
    /**
     * An array of AccountInfo objects that identifies the list of accounts that the customer owns.
     * @var AccountInfo[]
     */
    public $AccountsInfo;
}
