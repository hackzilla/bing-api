<?php

namespace BingAds\CustomerManagement;

/**
 * Gets a list of objects that contains account identification information, including the name and identifier of the accounts for the specified customer. To get the details of an account, call the GetAccount operation.
 * @link http://msdn.microsoft.com/en-us/library/ff728411(v=MSADS.80).aspx GetAccountsInfoRequest Request Object
 */
final class GetAccountsInfoRequest
{
    /**
     * The identifier of the customer who owns the accounts to get. If not set, the user's credentials are used to determine the customer.
     * @var long
     */
    public $CustomerId;

    /**
     * @var boolean
     */
    public $OnlyParentAccounts;
}
