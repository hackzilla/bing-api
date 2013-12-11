<?php

namespace BingAds\CustomerBilling;

/**
 * Response object for the GetInsertionOrdersByAccount service operation.
 * @link http://msdn.microsoft.com/en-us/library/ff728372(v=MSADS.80).aspx GetInsertionOrdersByAccountResponse Response Object
 */
final class GetInsertionOrdersByAccountResponse
{
    /**
     * A list of insertion orders.
     * @var InsertionOrder[]
     */
    public $InsertionOrders;
}
