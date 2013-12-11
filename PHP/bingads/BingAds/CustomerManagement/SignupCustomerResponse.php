<?php

namespace BingAds\CustomerManagement;

/**
 * Response object for the SignupCustomer service operation.
 * @link http://msdn.microsoft.com/en-us/library/bb671962(v=MSADS.80).aspx SignupCustomerResponse Response Object
 */
final class SignupCustomerResponse
{
    /**
     * A system-generated customer identifier.
     * @var long
     */
    public $CustomerId;

    /**
     * A system-generated customer number that is used in the Bing Ads web application. The customer number is of the form, C nnnnnnn, where nnnnnnn is a series of digits.
     * @var string
     */
    public $CustomerNumber;

    /**
     * A system-generated user identifier.
     * @var long
     */
    public $UserId;

    /**
     * A system-generated account identifier if you specified an account object in the request; otherwise, NULL.
     * @var long
     */
    public $AccountId;

    /**
     * A system-generated account number that is used to identify the account in the Bing Ads web application. The account number has the form, X nnnnnnn, where nnnnnnn is a series of digits.
     * @var string
     */
    public $AccountNumber;

    /**
     * The date and time that the account was added. The date and time value reflects the date and time at the server, not the client. For information about the format of the date and time, see the dateTime entry in Primitive XML Data Types.
     * @var dateTime
     */
    public $CreateTime;
}
