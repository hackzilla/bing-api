<?php

namespace BingAds\CustomerManagement;

/**
 * Signs up a customer with Bing Ads.
 * @link http://msdn.microsoft.com/en-us/library/bb671962(v=MSADS.80).aspx SignupCustomerRequest Request Object
 */
final class SignupCustomerRequest
{
    /**
     * A Customer object that specifies the details of the customer that you are adding.
     * @var Customer
     */
    public $Customer;

    /**
     * A User object that specifies the details of the user who will have super-Administrator permissions for the customer.
     * @var User
     */
    public $User;

    /**
     * An Account object that specifies the details of the customer's primary account.
     * @var Account
     */
    public $Account;

    /**
     * The customer identifier of the reseller that will manage this customer.
     * @var long
     */
    public $ParentCustomerId;

    /**
     * Determines whether the customer is an advertiser or publisher. The default is Advertiser.
     * @var ApplicationType
     */
    public $ApplicationScope;
}
