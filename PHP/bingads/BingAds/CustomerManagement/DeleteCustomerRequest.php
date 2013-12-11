<?php

namespace BingAds\CustomerManagement;

/**
 * Deletes a customer.
 * @link http://msdn.microsoft.com/en-us/library/ff728409(v=MSADS.80).aspx DeleteCustomerRequest Request Object
 */
final class DeleteCustomerRequest
{
    /**
     * The identifier of the customer to delete.
     * @var long
     */
    public $CustomerId;

    /**
     * The time-stamp value that the operation uses to reconcile the update. You must call the GetCustomer operation to get the time-stamp value. The delete operation fails if the customer object has a time-stamp value that differs from the one that you pass.
     * @var base64Binary
     */
    public $TimeStamp;
}
