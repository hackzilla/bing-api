<?php

namespace BingAds\CustomerBilling;

/**
 * Gets the amount spent by the account in the specified month.
 * @link http://msdn.microsoft.com/en-us/library/gg241242(v=MSADS.80).aspx GetAccountMonthlySpendRequest Request Object
 */
final class GetAccountMonthlySpendRequest
{
    /**
     * @var long
     */
    public $AccountId;

    /**
     * @var dateTime
     */
    public $MonthYear;
}
