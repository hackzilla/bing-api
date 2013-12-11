<?php

namespace BingAds\CustomerBilling;

/**
 * Gets the amount spent by the account in the specified month.
 * @link http://msdn.microsoft.com/en-us/library/dn451264(v=msads.90).aspx GetAccountMonthlySpendRequest Request Object
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
