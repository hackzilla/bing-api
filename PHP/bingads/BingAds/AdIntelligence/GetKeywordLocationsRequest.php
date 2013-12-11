<?php

namespace BingAds\AdIntelligence;

/**
 * Gets the geographical locations of users who have searched for the specified keywords.
 * @link http://msdn.microsoft.com/en-us/library/hh921764(v=MSADS.80).aspx GetKeywordLocationsRequest Request Object
 */
final class GetKeywordLocationsRequest
{
    /**
     * An array of keywords for which you want to get geographical location information. The data is broken out by device type. The array can contain a maximum of 1,000 keywords, and each keyword can contain a maximum of 100 characters.
     * @var string[]
     */
    public $Keywords;

    /**
     * The language in which the keywords are written.
     * @var string
     */
    public $Language;

    /**
     * The country code of the country/region to use as the source of the location data.
     * @var string
     */
    public $PublisherCountry;

    /**
     * A list of one or more of the following device types.
     * @var string[]
     */
    public $Device;

    /**
     * The level at which to aggregate the geographical location data. The following are the possible values.
     * @var int
     */
    public $Level;

    /**
     * The country from which the search originated.
     * @var string
     */
    public $ParentCountry;

    /**
     * The maximum number of locations to return. You can request a maximum of 10 locations.
     * @var int
     */
    public $MaxLocations;
}
