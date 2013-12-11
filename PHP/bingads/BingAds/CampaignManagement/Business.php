<?php

namespace BingAds\CampaignManagement;

/**
 * Defines a business location for business location targeting.
 * @link http://msdn.microsoft.com/en-us/library/dd797093(v=msads.80).aspx Business Data Object
 */
final class Business
{
    /**
     * The first line of the address, which can contain a maximum of 35 characters.
     * @var string
     */
    public $AddressLine1;

    /**
     * The second line of the address, which can contain a maximum of 35 characters.
     * @var string
     */
    public $AddressLine2;

    /**
     * The business icon to display in Bing Maps.
     * @var BusinessImageIcon
     */
    public $BusinessImageIcon;

    /**
     * The city where the business is located. The city can contain a maximum of 35 characters.
     * @var string
     */
    public $City;

    /**
     * The country/region where the business is located. The country/region can contain a maximum of two characters.
     * @var string
     */
    public $CountryOrRegion;

    /**
     * The description of the business, which can contain a maximum of 1,024 characters.
     * @var string
     */
    public $Description;

    /**
     * The email address of the business. The email address can contain a maximum of 200 characters.
     * @var string
     */
    public $Email;

    /**
     * A status value that indicates whether the business' latitude and longitude values have been determined.
     * @var BusinessGeoCodeStatus
     */
    public $GeoCodeStatus;

    /**
     * The days and hours that the business is open.
     * @var HoursOfOperation[]
     */
    public $HrsOfOperation;

    /**
     * A system-generated identifier of the business object.
     * @var long
     */
    public $Id;

    /**
     * A value that determines whether the business is open 24 hours a day.
     * @var boolean
     */
    public $IsOpen24Hours;

    /**
     * The latitude of the business location.
     * @var double
     */
    public $LatitudeDegrees;

    /**
     * The longitude of the business location.
     * @var double
     */
    public $LongitudeDegrees;

    /**
     * The name of the business, which can contain a maximum of 35 characters.
     * @var string
     */
    public $Name;

    /**
     * An additional form of payment that the business accepts that is not included in the Payment element.
     * @var string
     */
    public $OtherPaymentTypeDesc;

    /**
     * The forms of payment that the business accepts. For possible values, see PaymentType.
     * @var PaymentType[]
     */
    public $Payment;

    /**
     * The phone number of the business. The phone number can contain a maximum of 20 characters.
     * @var string
     */
    public $Phone;

    /**
     * The state, province, or territory where the business is located. This element can contain a maximum of 50 characters.
     * @var string
     */
    public $StateOrProvince;

    /**
     * The status of the business object.
     * @var BusinessStatus
     */
    public $Status;

    /**
     * The URL of the business's website. The URL can contain a maximum of 2,048 characters.
     * @var string
     */
    public $URL;

    /**
     * The ZIP Code or Postal Code of the business location. This element can contain a maximum of 10 characters.
     * @var string
     */
    public $ZipOrPostalCode;
}
