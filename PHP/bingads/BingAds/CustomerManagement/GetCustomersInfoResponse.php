<?php

namespace BingAds\CustomerManagement;

/**
 * Response object for the GetCustomersInfo service operation.
 * @link http://msdn.microsoft.com/en-us/library/ff728420(v=MSADS.80).aspx GetCustomersInfoResponse Response Object
 */
final class GetCustomersInfoResponse
{
    /**
     * An array of CustomerInfo objects that identifies the list of customers that meet the filter criteria.
     * @var CustomerInfo[]
     */
    public $CustomersInfo;
}
