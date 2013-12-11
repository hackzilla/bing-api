<?php

namespace BingAds\CustomerManagement;

/**
 * Gets a list of the accounts and customers that match the specified filter criteria.
 * @link http://msdn.microsoft.com/en-us/library/hh420974(v=MSADS.80).aspx FindAccountsOrCustomersInfoRequest Request Object
 */
final class FindAccountsOrCustomersInfoRequest
{
    /**
     * The criteria to use to filter the list of accounts and customers. You can specify either an account name, account number, or customer name.
     * @var string
     */
    public $Filter;

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
