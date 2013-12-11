<?php

namespace BingAds\CustomerManagement;

/**
 * Defines the condition of results for the SearchCustomers operation.
 * @link http://msdn.microsoft.com/en-us/library/dn313271(v=msads.80).aspx PredicateOperator Value Set
 */
final class PredicateOperator
{
    const Equals = 'Equals';
    const NotEquals = 'NotEquals';
    const Contains = 'Contains';
}
