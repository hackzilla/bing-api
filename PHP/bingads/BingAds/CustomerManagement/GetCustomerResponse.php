<?php

namespace BingAds\CustomerManagement;

/**
 * Response object for the GetCustomer service operation.
 * @link http://msdn.microsoft.com/en-us/library/bb671716(v=MSADS.80).aspx GetCustomerResponse Response Object
 */
final class GetCustomerResponse
{
    /**
     * A Customer object that contains information about the customer.
     * @var Customer
     */
    public $Customer;
}
