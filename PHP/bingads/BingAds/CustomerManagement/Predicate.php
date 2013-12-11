<?php

namespace BingAds\CustomerManagement;

/**
 * Defines a predicate for the list of customers requested using the SearchCustomers operation.
 * @link http://msdn.microsoft.com/en-us/library/dn452060(v=msads.90).aspx Predicate Data Object
 */
final class Predicate
{
    /**
     * The account or customer element used to filter the results of the SearchCustomers operation.
     * @var string
     */
    public $Field;

    /**
     * Defines the relationship between the field and the value.
     */
    public $Operator;

    /**
     * The string to search in the specified field.
     * @var string
     */
    public $Value;
}
