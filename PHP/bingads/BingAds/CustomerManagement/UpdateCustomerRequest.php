<?php

namespace BingAds\CustomerManagement;

/**
 * Updates the details of the specified customer.
 * @link http://msdn.microsoft.com/en-us/library/dn451294(v=msads.90).aspx UpdateCustomerRequest Request Object
 */
final class UpdateCustomerRequest
{
    /**
     * A customer object that contains the updated customer information.
     * @var Customer
     */
    public $Customer;
}
