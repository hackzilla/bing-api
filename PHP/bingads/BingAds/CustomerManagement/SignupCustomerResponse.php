<?php

namespace BingAds\CustomerManagement;

/**
 * Response object for the SignupCustomer service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn451287(v=msads.90).aspx SignupCustomerResponse Response Object
 */
final class SignupCustomerResponse
{
    /**
     * @var long
     */
    public $CustomerId;

    /**
     * @var string
     */
    public $CustomerNumber;

    /**
     * @var long
     */
    public $AccountId;

    /**
     * @var string
     */
    public $AccountNumber;

    /**
     * @var dateTime
     */
    public $CreateTime;
}
