<?php

namespace BingAds\CustomerManagement;

/**
 * Deletes a user.
 * @link http://msdn.microsoft.com/en-us/library/dn451276(v=msads.90).aspx DeleteUserRequest Request Object
 */
final class DeleteUserRequest
{
    /**
     * The identifier of the user to delete.
     * @var long
     */
    public $UserId;

    /**
     * The time-stamp value that the operation uses to reconcile the update. You must call the GetUser operation to get the time-stamp value. The delete operation fails if the user object has a time-stamp value that differs from the one that you pass.
     * @var base64Binary
     */
    public $TimeStamp;
}
