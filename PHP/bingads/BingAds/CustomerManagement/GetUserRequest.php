<?php

namespace BingAds\CustomerManagement;

/**
 * Gets the details of a user, such as name, contact information, and credentials.
 * @link http://msdn.microsoft.com/en-us/library/ff728397(v=MSADS.80).aspx GetUserRequest Request Object
 */
final class GetUserRequest
{
    /**
     * The identifier of the user to get.
     * @var long
     */
    public $UserId;
}
