<?php

namespace BingAds\CustomerManagement;

/**
 * Response object for the GetUsersInfo service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn451283(v=msads.90).aspx GetUsersInfoResponse Response Object
 */
final class GetUsersInfoResponse
{
    /**
     * A list of UserInfo objects that identifies the list of users who meet the filter criteria.
     * @var UserInfo[]
     */
    public $UsersInfo;
}
