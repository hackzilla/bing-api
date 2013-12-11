<?php

namespace BingAds\CustomerManagement;

/**
 * Response object for the UpdateCustomer service operation.
 * @link http://msdn.microsoft.com/en-us/library/bb672099(v=MSADS.80).aspx UpdateCustomerResponse Response Object
 */
final class UpdateCustomerResponse
{
    /**
     *  The date and time that the customer was updated. For information about the format of the date and time, see the dateTime entry in Primitive XML Data Types.
     * @var dateTime
     */
    public $LastModifiedTime;
}
