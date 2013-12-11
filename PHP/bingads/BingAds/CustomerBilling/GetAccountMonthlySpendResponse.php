<?php

namespace BingAds\CustomerBilling;

/**
 * Response object for the GetAccountMonthlySpend service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn451264(v=msads.90).aspx GetAccountMonthlySpendResponse Response Object
 */
final class GetAccountMonthlySpendResponse
{
    /**
     * The amount spent by the account in the specified period.
     * @var double
     */
    public $Amount;
}
