<?php

namespace BingAds\CustomerManagement;

/**
 * Gets the details of a customer, such as its address and financial status.
 * @link http://msdn.microsoft.com/en-us/library/bb671716(v=MSADS.80).aspx GetCustomerRequest Request Object
 */
final class GetCustomerRequest
{
    /**
     * The identifier of the customer whose information you want to get.
     * @var long
     */
    public $CustomerId;
}
