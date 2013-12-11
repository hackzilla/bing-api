<?php

namespace BingAds\CustomerManagement;

/**
 * Defines a postal address.
 * @link http://msdn.microsoft.com/en-us/library/bb671505(v=msads.80).aspx Address Data Object
 */
final class Address
{
    /**
     * The city, which can contain a maximum of 35 characters.
     * @var string
     */
    public $City;

    /**
     * The country/region code. For possible values, see Country Codes.
     * @var string
     */
    public $CountryCode;

    /**
     * The system generated identifier of the address object.
     * @var long
     */
    public $Id;

    /**
     * The first line of the address, which can contain a maximum of 35 characters.
     * @var string
     */
    public $Line1;

    /**
     * The second line of the address, which can contain a maximum of 35 characters.
     * @var string
     */
    public $Line2;

    /**
     * The third line of the address, which can contain a maximum of 35 characters.
     * @var string
     */
    public $Line3;

    /**
     * The fourth line of the address, which can contain a maximum of 35 characters.
     * @var string
     */
    public $Line4;

    /**
     * The Postal or ZIP Code, which can contain a maximum of 10 characters.
     * @var string
     */
    public $PostalCode;

    /**
     * The state or province. This element is required for countries that define sub geographies, but should be set to null for countries that do not define sub geographies, such as Singapore.
     * @var string
     */
    public $StateOrProvince;

    /**
     * @var base64Binary
     */
    public $TimeStamp;
}
