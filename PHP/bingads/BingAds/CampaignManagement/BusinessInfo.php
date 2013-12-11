<?php

namespace BingAds\CampaignManagement;

/**
 * Defines an object that contains a subset of the business location details.
 * @link http://msdn.microsoft.com/en-us/library/dd797138(v=msads.80).aspx BusinessInfo Data Object
 */
final class BusinessInfo
{
    /**
     * The identifier of the business.
     * @var long
     */
    public $Id;

    /**
     * The name of the business.
     * @var string
     */
    public $Name;
}
