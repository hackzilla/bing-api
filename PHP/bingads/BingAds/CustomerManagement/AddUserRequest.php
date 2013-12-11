<?php

namespace BingAds\CustomerManagement;

/**
 * Adds a user to the specified customer and specifies the accounts that they can manage.
 * @link http://msdn.microsoft.com/en-us/library/ff728421(v=MSADS.80).aspx AddUserRequest Request Object
 */
final class AddUserRequest
{
    /**
     * The user to add.
     * @var User
     */
    public $User;

    /**
     * The user role, which determines the level of access that the user has to the accounts specified in the AccountIds element.
     * @var UserRole
     */
    public $Role;

    /**
     * An array of identifiers of the accounts that the user can manage. To specify that the user can manage all current and future accounts of the customer to which the user belongs, set to NULL.
     * @var long[]
     */
    public $AccountIds;
}
