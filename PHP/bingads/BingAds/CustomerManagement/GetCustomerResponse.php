<?php

namespace BingAds\CustomerManagement;

/**
 * Response object for the GetCustomer service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn451279(v=msads.90).aspx GetCustomerResponse Response Object
 */
final class GetCustomerResponse
{
    /**
     * A Customer object that contains information about the customer.
     * @var Customer
     */
    public $Customer;
}
