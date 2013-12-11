<?php

namespace BingAds\CustomerManagement;

/**
 * Response object for the UpdateUser service operation.
 * @link http://msdn.microsoft.com/en-us/library/ff728432(v=MSADS.80).aspx UpdateUserResponse Response Object
 */
final class UpdateUserResponse
{
    /**
     * The date and time that the user was updated. For information about the format of the date and time, see the dateTime entry in Primitive XML Data Types.
     * @var dateTime
     */
    public $LastModifiedTime;
}
