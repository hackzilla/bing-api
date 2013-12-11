<?php

namespace BingAds\CustomerManagement;

/**
 * Gets a list of accounts owned by the specified customer that match the specified filter criteria.
 * @link http://msdn.microsoft.com/en-us/library/hh311376(v=MSADS.80).aspx FindAccountsRequest Request Object
 */
final class FindAccountsRequest
{
    /**
     * The identifier of the customer whose accounts you want to get.
     * @var long
     */
    public $CustomerId;

    /**
     * The criteria to use to filter the list of accounts. You can specify either an account name or an account number. If your filter value is of the form, X nnnnn, where nnnnn is a series of digits, the operation filters by account number.
     * @var string
     */
    public $AccountFilter;

    /**
     * A nonzero positive integer that specifies the number of accounts to return in the result. You must specify a value from 1 through 5,000.
     * @var int
     */
    public $TopN;

    /**
     * A value that determines whether to return advertiser accounts or publisher accounts. If you do not specify the scope, the list may include both types of accounts.
     * @var ApplicationType
     */
    public $ApplicationScope;
}
