<?php

namespace BingAds\CampaignManagement;

/**
 * Defines an object that contains a publisher country and determines whether your ads are served on websites in the country.
 * @link http://msdn.microsoft.com/en-us/library/hh299899(v=msads.80).aspx PublisherCountry Data Object
 */
final class PublisherCountry
{
    /**
     * The country code of the country where you want your ads to serve. For possible values, see Publisher Country Values.
     * @var string
     */
    public $Country;

    /**
     * A value that determines whether you want your ads to serve in the specified country. Set to true if you want to your ads served to the publisher websites in the specified country; otherwise, set to false if you do not want your ads served to the specified country.
     * @var boolean
     */
    public $IsOptedIn;
}
