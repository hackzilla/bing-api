<?php

namespace BingAds\CustomerManagement;

/**
 * Searches for customers that match a specified criteria.
 * @link http://msdn.microsoft.com/en-us/library/dn452055(v=msads.90).aspx SearchCustomersRequest Request Object
 */
final class SearchCustomersRequest
{
    /**
     * A value that determines whether to return results for advertising customers or publishing customers. If you do not specify the scope, the list may include both types of customers.
     * @var ApplicationType
     */
    public $ApplicationScope;

    /**
     * Determines the request conditions. You should not specify more than three Predicate objects.
     * @var Predicate[]
     */
    public $Predicates;

    /**
     * Determines the minimum and maximum customer creation date range.
     * @var DateRange
     */
    public $DateRange;

    /**
     * Determines the order of results.
     * @var OrderBy[]
     */
    public $Ordering;

    /**
     * Determines the index and size of results per page.
     * @var Paging
     */
    public $PageInfo;
}
