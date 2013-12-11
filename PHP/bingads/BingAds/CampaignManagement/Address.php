<?php

namespace BingAds\CampaignManagement;

/**
 * Defines a postal address.
 * @link http://msdn.microsoft.com/en-us/library/jj721596(v=msads.80).aspx Address Data Object
 */
final class Address
{
    /**
     * The name of the city where the street address is located. The name can contain a maximum of 80 characters.
     * @var string
     */
    public $CityName;

    /**
     * The country where the street address is located. The country code must contain a 2 character country code. For a list of possible country codes that you can specify, see Publisher Country.
     * @var string
     */
    public $CountryCode;

    /**
     * The postal or zip code. The postal code can contain a maximum of 80 characters.
     * @var string
     */
    public $PostalCode;

    /**
     * A code that identifies the state or province where the street address is located. For example, WA. The code can contain a maximum of 50 characters.
     * @var string
     */
    public $ProvinceCode;

    /**
     * The name of the state or province where the street address is located. For example, Washington. The name can contain a maximum of 50 characters.
     * @var string
     */
    public $ProvinceName;

    /**
     * The first line of the address. The first line can contain a maximum of 80 characters
     * @var string
     */
    public $StreetAddress;

    /**
     * The second line of the address. The second line can contain a maximum of 80 characters
     * @var string
     */
    public $StreetAddress2;
}
