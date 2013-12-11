<?php

namespace BingAds\CustomerManagement;

/**
 * Response object for the GetAccount service operation.
 * @link http://msdn.microsoft.com/en-us/library/ff728388(v=MSADS.80).aspx GetAccountResponse Response Object
 */
final class GetAccountResponse
{
    /**
     * An Account object that contains information about the account, such as payment method, account type, and parent customer.
     * @var Account
     */
    public $Account;
}
