<?php

namespace BingAds\CustomerManagement;

/**
 * Gets a list of objects that contains account identification information, for example the name and identifier of the account, for the specified customer.
 * @link http://msdn.microsoft.com/en-us/library/dn451289(v=msads.90).aspx GetAccountsInfoRequest Request Object
 */
final class GetAccountsInfoRequest
{
    /**
     * The identifier of the customer who owns the accounts to get. If not set, the user's credentials are used to determine the customer.
     * @var long
     */
    public $CustomerId;

    /**
     * Determines whether to return only the accounts that belong to the customer or to also return the accounts that the customer manages for other customers. To return all accounts (those that belong to the customer and those that the customer manages), set this element to false; otherwise, set to true to return account information for only the specified customer. The default is false.
     * @var boolean
     */
    public $OnlyParentAccounts;
}
