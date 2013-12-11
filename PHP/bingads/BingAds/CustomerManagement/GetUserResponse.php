<?php

namespace BingAds\CustomerManagement;

/**
 * Response object for the GetUser service operation.
 * @link http://msdn.microsoft.com/en-us/library/ff728397(v=MSADS.80).aspx GetUserResponse Response Object
 */
final class GetUserResponse
{
    /**
     * A User object that contains information about the user.
     * @var User
     */
    public $User;

    /**
     * An array of roles that determines the permissions that the user has to manage the customer or account data. To determine whether a role is an account role or customer role, see UserRole. A user can have account roles or customer roles, but not both. Any role that the operation returns that is not documented in the UserRole value set is considered for internal use only.
     * @var int[]
     */
    public $Roles;

    /**
     * An array of identifiers of the accounts to which the user has access permissions. If the Roles element contains an account role and the Accounts element contains a 0 (zero)-length array, it indicates that the user has access permissions to all of the customer's accounts.
     * @var long[]
     */
    public $Accounts;

    /**
     * An array of identifiers of the customers to which the user has access permissions. If the Roles element contains a customer role and the Customers element contains a 0 (zero)-length array, it indicates that the user has access permissions to all customers.
     * @var long[]
     */
    public $Customers;
}
