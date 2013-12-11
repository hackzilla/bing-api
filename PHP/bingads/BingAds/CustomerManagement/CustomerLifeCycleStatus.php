<?php

namespace BingAds\CustomerManagement;

/**
 * Defines the possible status values of a customer.
 * @link http://msdn.microsoft.com/en-us/library/ff728419(v=msads.80).aspx CustomerLifeCycleStatus Value Set
 */
final class CustomerLifeCycleStatus
{
    /** The customer is active. */
    const Active = 'Active';

    /** The customer is inactive, which means that the customer was deleted. */
    const Inactive = 'Inactive';
}
