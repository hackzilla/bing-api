<?php

namespace BingAds\CustomerManagement;

/**
 * Gets the details of an account.
 * @link http://msdn.microsoft.com/en-us/library/ff728388(v=MSADS.80).aspx GetAccountRequest Request Object
 */
final class GetAccountRequest
{
    /**
     * The identifier of the account to get.
     * @var long
     */
    public $AccountId;
}
