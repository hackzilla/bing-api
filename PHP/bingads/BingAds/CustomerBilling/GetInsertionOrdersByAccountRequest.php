<?php

namespace BingAds\CustomerBilling;

/**
 * Gets a list of insertion orders for the specified account.
 * @link http://msdn.microsoft.com/en-us/library/dn451269(v=msads.90).aspx GetInsertionOrdersByAccountRequest Request Object
 */
final class GetInsertionOrdersByAccountRequest
{
    /**
     * The identifier of the account that contains the insertion orders to get.
     * @var long
     */
    public $AccountId;

    /**
     * A list of identifiers of the insertion orders to get. To get all insertion orders, including those that have expired, set to NULL.
     * @var long[]
     */
    public $InsertionOrderIds;
}
