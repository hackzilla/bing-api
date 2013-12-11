<?php

namespace BingAds\CustomerBilling;

/**
 * Response object for the GetInsertionOrdersByAccount service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn451269(v=msads.90).aspx GetInsertionOrdersByAccountResponse Response Object
 */
final class GetInsertionOrdersByAccountResponse
{
    /**
     * A list of insertion orders.
     * @var InsertionOrder[]
     */
    public $InsertionOrders;
}
