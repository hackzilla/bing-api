<?php

namespace BingAds\CustomerManagement;

/**
 * Response object for the UpdateAccount service operation.
 * @link http://msdn.microsoft.com/en-us/library/ee729181(v=MSADS.80).aspx UpdateAccountResponse Response Object
 */
final class UpdateAccountResponse
{
    /**
     * The date and time that the account was updated. For information about the format of the date and time, see the dateTime entry in Primitive XML Data Types.
     * @var dateTime
     */
    public $LastModifiedTime;
}
