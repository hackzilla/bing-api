<?php

namespace BingAds\CampaignManagement;

/**
 * Defines an ad extension that specifies a business' address and phone number to include in a text ad.The LocationAdExtension object derives from the AdExtension object. For a list of inherited elements, see the AdExtension object.
 * @link http://msdn.microsoft.com/en-us/library/jj721600(v=msads.90).aspx LocationAdExtension Data Object
 */
final class LocationAdExtension extends AdExtension
{
    /**
     * The business' address.
     * @var Address
     */
    public $Address;

    /**
     * The name of the business. The name can contain a maximum of 80 characters.
     * @var string
     */
    public $CompanyName;

    /**
     * A status value that indicates whether the business' latitude and longitude coordinates have been determined.
     * @var BusinessGeoCodeStatus
     */
    public $GeoCodeStatus;

    /**
     * The latitude and longitude coordinates of the specified Address element. The coordinates are used to mark the business' location on Bing Maps when the user clicks the address on the ad. If the specified coordinates are not within the range of valid values, the service determines the coordinates based on the address.
     * @var GeoPoint
     */
    public $GeoPoint;

    /**
     * The identifier of an icon used to mark the business' location on Bing Maps. You can specify the identifier of a predefined icon or a custom icon that you added by calling the AddMedia operation. The size of a custom icon can be up to 26x26.
     * @var long
     */
    public $IconMediaId;

    /**
     * The identifier of the image to include in the ad. You must specify the identifier of the image that you added to the image library by calling the AddMedia operation.
     * @var long
     */
    public $ImageMediaId;

    /**
     * The business' phone number to include in the ad. The phone number is clickable on hi-fi mobile devices.
     * @var string
     */
    public $PhoneNumber;
}
