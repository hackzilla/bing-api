<?php

namespace BingAds\CustomerManagement;

/**
 * Response object for the GetAccount service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn451273(v=msads.90).aspx GetAccountResponse Response Object
 */
final class GetAccountResponse
{
    /**
     * An account object that contains information about the account, such as payment method, account type, and parent customer.
     * @var Account
     */
    public $Account;
}
