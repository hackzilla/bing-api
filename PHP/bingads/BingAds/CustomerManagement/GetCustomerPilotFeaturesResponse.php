<?php

namespace BingAds\CustomerManagement;

/**
 * Response object for the GetCustomerPilotFeatures service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn451285(v=msads.90).aspx GetCustomerPilotFeaturesResponse Response Object
 */
final class GetCustomerPilotFeaturesResponse
{
    /**
     * A list of integers that identifies the pilot programs in which the customer participates. For a list of possible pilot program values, contact your account manager.
     * @var int[]
     */
    public $FeaturePilotFlags;
}
