<?php

namespace BingAds\CustomerManagement;

/**
 * Response object for the SearchCustomers service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn452055(v=msads.90).aspx SearchCustomersResponse Response Object
 */
final class SearchCustomersResponse
{
    /**
     * A list of customers that meet the specified criteria.
     * @var Customer[]
     */
    public $Customers;
}
