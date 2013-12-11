<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the possible types of geographical location exclusions that you can apply to a location target.
 * @link http://msdn.microsoft.com/en-us/library/jj604192(v=msads.80).aspx GeoLocationType Value Set
 */
final class GeoLocationType
{
    /** Exclude a country from the location target. */
    const Country = 'Country';

    /** Exclude a state or province from the location target. */
    const SubGeography = 'SubGeography';

    /** Exclude a metropolitan area from the location target. */
    const MetroArea = 'MetroArea';

    /** Exclude a city from the location target. */
    const City = 'City';
}
