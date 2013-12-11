<?php

namespace BingAds\CustomerManagement;

/**
 * Response object for the UpdateUserRoles service operation.
 * @link http://msdn.microsoft.com/en-us/library/ff728382(v=MSADS.80).aspx UpdateUserRolesResponse Response Object
 */
final class UpdateUserRolesResponse
{
    /**
     * The date and time that the roles of the user were updated. For information about the format of the date and time, see the dateTime entry in Primitive XML Data Types.
     * @var dateTime
     */
    public $LastModifiedTime;
}
