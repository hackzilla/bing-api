<?php

namespace BingAds\CustomerManagement;

/**
 * Response object for the GetUsersInfo service operation.
 * @link http://msdn.microsoft.com/en-us/library/ff728431(v=MSADS.80).aspx GetUsersInfoResponse Response Object
 */
final class GetUsersInfoResponse
{
    /**
     * An array of UserInfo objects that identifies the list of users who meet the filter criteria.
     * @var UserInfo[]
     */
    public $UsersInfo;
}
