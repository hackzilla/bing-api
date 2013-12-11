<?php

namespace BingAds\CustomerManagement;

/**
 * Gets the details of an account.
 * @link http://msdn.microsoft.com/en-us/library/dn451273(v=msads.90).aspx GetAccountRequest Request Object
 */
final class GetAccountRequest
{
    /**
     * The identifier of the account to get.
     * @var long
     */
    public $AccountId;
}
