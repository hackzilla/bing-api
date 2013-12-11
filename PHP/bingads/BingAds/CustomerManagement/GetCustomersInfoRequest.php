<?php

namespace BingAds\CustomerManagement;

/**
 * Gets a list of objects that contains customer identification information, including the name and identifier of the customer. To get the details of a customer, call the GetCustomer operation.
 * @link http://msdn.microsoft.com/en-us/library/ff728420(v=MSADS.80).aspx GetCustomersInfoRequest Request Object
 */
final class GetCustomersInfoRequest
{
    /**
     * A partial or full name of the customers that you want to get. The operation includes the customer in the result if the customer's name begins with the specified filter name. If you do not want to filter by customer name, set this element to an empty string.
     * @var string
     */
    public $CustomerNameFilter;

    /**
     * A nonzero positive integer that specifies the number of customers to return in the result.
     * @var int
     */
    public $TopN;

    /**
     * A value that determines whether to return results for advertising customers or publishing customers. If you do not specify the scope, the list may include both types of customers.
     * @var ApplicationType
     */
    public $ApplicationScope;
}
