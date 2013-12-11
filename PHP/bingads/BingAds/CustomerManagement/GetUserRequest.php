<?php

namespace BingAds\CustomerManagement;

/**
 * Gets the details of a user.
 * @link http://msdn.microsoft.com/en-us/library/dn451280(v=msads.90).aspx GetUserRequest Request Object
 */
final class GetUserRequest
{
    /**
     * The identifier of the user to get.
     * @var long
     */
    public $UserId;
}
