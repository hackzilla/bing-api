<?php

namespace BingAds\CustomerManagement;

/**
 * Gets a list of objects that contain customer identification information, for example the name and identifier of the customer.The list that this operation returns is based on the customers that the user that you specify in the UserName header element of the request, has access to. If the user is a member of the reseller's user group, the list will contain all customers that the reseller has signed up or a subset of customers if the user is limited to a subset of customers by a user role.
 * @link http://msdn.microsoft.com/en-us/library/dn451282(v=msads.90).aspx GetCustomersInfoRequest Request Object
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
