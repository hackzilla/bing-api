<?php

namespace BingAds\CampaignManagement;

/**
 * This version of AdExtension will no longer be supported beginning early Q3 2013. If you implemented this version, you must migrate your application to use location ad extensions. For information about implementing location ad extensions, see Ad Extensions.
 * @link http://msdn.microsoft.com/en-us/library/hh527708(v=msads.80).aspx AdExtension Data Object
 */
final class AdExtension
{
    /**
     * The identifier of the campaign to which the address and phone preferences apply.
     * @var long
     */
    public $CampaignId;

    /**
     * Determines whether to include the address and phone number of the business in the text ad. To include the business' address and phone number in the text ad, set to true; otherwise, set to false.
     * @var boolean
     */
    public $EnableLocationExtension;

    /**
     * The phone number to include in the text ad. If EnableLocationExtension is set to true, this phone number overrides the phone number specified in the business object.
     * @var PhoneExtension
     */
    public $PhoneExtension;
}
