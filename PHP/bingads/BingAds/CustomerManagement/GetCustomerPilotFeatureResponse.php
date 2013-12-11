<?php

namespace BingAds\CustomerManagement;

/**
 * Response object for the GetCustomerPilotFeature service operation.
 * @link http://msdn.microsoft.com/en-us/library/ff728391(v=MSADS.80).aspx GetCustomerPilotFeatureResponse Response Object
 */
final class GetCustomerPilotFeatureResponse
{
    /**
     * A list of integers that identifies the pilot programs in which the customer participates. For a list of possible pilot program values, contact your account manager.
     * @var int[]
     */
    public $FeaturePilotFlags;
}
