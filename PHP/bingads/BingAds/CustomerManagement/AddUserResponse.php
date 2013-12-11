<?php

namespace BingAds\CustomerManagement;

/**
 * Response object for the AddUser service operation.
 * @link http://msdn.microsoft.com/en-us/library/ff728421(v=MSADS.80).aspx AddUserResponse Response Object
 */
final class AddUserResponse
{
    /**
     * The identifier of the user who was added.
     * @var long
     */
    public $Id;

    /**
     * The date and time that the user was added. The date and time value reflects the date and time of the server, not the client. For information about the format of the date and time, see the dateTime entry in Primitive XML Data Types.
     * @var dateTime
     */
    public $CreateTime;
}
