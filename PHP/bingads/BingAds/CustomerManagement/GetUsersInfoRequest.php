<?php

namespace BingAds\CustomerManagement;

/**
 * Gets a list of objects that contains user identification information, including the user name and identifier of the user. To get the details of a user, call the GetUser operation.
 * @link http://msdn.microsoft.com/en-us/library/ff728431(v=MSADS.80).aspx GetUsersInfoRequest Request Object
 */
final class GetUsersInfoRequest
{
    /**
     * The identifier of the customer to which the users belong.
     * @var long
     */
    public $CustomerId;

    /**
     * The status value that the operation uses to filter the list of users that it returns (the operation returns only those users with the specified status).
     * @var UserLifeCycleStatus
     */
    public $StatusFilter;
}
