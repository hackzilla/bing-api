<?php

namespace BingAds\CustomerManagement;

/**
 * Defines a predicate for the list of customers requested using the SearchCustomers operation.
 * @link http://msdn.microsoft.com/en-us/library/dn313269(v=msads.80).aspx Predicate Data Object
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
     * @var PredicateOperator
     */
    public $Operator;

    /**
     * The string to search in the specified field.
     * @var string
     */
    public $Value;
}
