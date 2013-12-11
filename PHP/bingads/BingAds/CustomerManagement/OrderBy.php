<?php

namespace BingAds\CustomerManagement;

/**
 * Defines an order for the list of customers returned using the SearchCustomers operation.
 * @link http://msdn.microsoft.com/en-us/library/dn452057(v=msads.90).aspx OrderBy Data Object
 */
final class OrderBy
{
    /**
     * Determines the field to order the results. For example order the results by Name.
     * @var OrderByField
     */
    public $Field;

    /**
     * Determines whether the results are ascending or descending.
     * @var SortOrder
     */
    public $Order;
}
