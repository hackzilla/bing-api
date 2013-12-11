<?php

namespace BingAds\CustomerManagement;

/**
 * Response object for the FindAccountsOrCustomersInfo service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn451281(v=msads.90).aspx FindAccountsOrCustomersInfoResponse Response Object
 */
final class FindAccountsOrCustomersInfoResponse
{
    /**
     * A list of AccountInfoWithCustomerData objects of the accounts and customers that match the specified filter criteria.
     * @var AccountInfoWithCustomerData[]
     */
    public $AccountInfoWithCustomerData;
}
