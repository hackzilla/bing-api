<?php

namespace BingAds\CustomerManagement;

/**
 * Gets a list of the pilot programs in which the specified customer participates.
 * @link http://msdn.microsoft.com/en-us/library/ff728391(v=MSADS.80).aspx GetCustomerPilotFeatureRequest Request Object
 */
final class GetCustomerPilotFeatureRequest
{
    /**
     * The identifier of the customer whose list of pilot programs you want to get.
     * @var long
     */
    public $CustomerId;
}
