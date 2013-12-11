<?php

namespace BingAds\CustomerManagement;

/**
 * Defines a customer identification object that contains information that identifies a customer.
 * @link http://msdn.microsoft.com/en-us/library/ff728384(v=msads.80).aspx CustomerInfo Data Object
 */
final class CustomerInfo
{
    /**
     * The system generated identifier of the customer.
     * @var long
     */
    public $Id;

    /**
     * The name of the customer.
     * @var string
     */
    public $Name;
}
