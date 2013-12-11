<?php

namespace BingAds\CustomerManagement;

/**
 * Defines the possible status values of a user.
 * @link http://msdn.microsoft.com/en-us/library/ee704179(v=msads.90).aspx UserLifeCycleStatus Value Set
 */
final class UserLifeCycleStatus
{
    /** The user is a new user who has not been activated. The user is sent notification about how to activate the account. After the user activates the account, the status changes to Active. */
    const Pending = 'Pending';

    /** The user is active. */
    const Active = 'Active';

    /** The user was disabled by the system. */
    const Inactive = 'Inactive';

    /** The user was deleted by using the DeleteUser operation. */
    const Deleted = 'Deleted';
}
