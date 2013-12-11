<?php

namespace BingAds\CustomerBilling;

/**
 * Response object for the GetAccountMonthlySpend service operation.
 * @link http://msdn.microsoft.com/en-us/library/gg241242(v=MSADS.80).aspx GetAccountMonthlySpendResponse Response Object
 */
final class GetAccountMonthlySpendResponse
{
    /**
     * The amount spent by the account in the specified period.
     * @var double
     */
    public $Amount;
}
