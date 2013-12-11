<?php

namespace BingAds\CustomerManagement;

/**
 * Updates the roles of the specified user.
 * @link http://msdn.microsoft.com/en-us/library/ff728382(v=MSADS.80).aspx UpdateUserRolesRequest Request Object
 */
final class UpdateUserRolesRequest
{
    /**
     * The identifier of the customer to which the user belongs.
     * @var long
     */
    public $CustomerId;

    /**
     * The identifier of the user whose role you want to update.
     * @var long
     */
    public $UserId;

    /**
     * The identifier of the role to which the values specified in the NewAccounts or NewCustomers element applies to, if set.
     * @var int
     */
    public $NewRoleId;

    /**
     * @var long[]
     */
    public $NewAccountIds;

    /**
     * @var long[]
     */
    public $NewCustomerIds;

    /**
     * The identifier of the role to which the values specified in the DeleteAccounts or DeleteCustomers element applies, if set. You also use this element if you are changing the role of the user from an account role to a customer role, or from a customer role to an account role.
     * @var int
     */
    public $DeleteRoleId;

    /**
     * @var long[]
     */
    public $DeleteAccountIds;

    /**
     * @var long[]
     */
    public $DeleteCustomerIds;
}
