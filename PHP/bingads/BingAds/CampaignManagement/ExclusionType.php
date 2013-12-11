<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the possible types of exclusions that you can apply to an entity.
 * @link http://msdn.microsoft.com/en-us/library/jj622173(v=msads.80).aspx ExclusionType Value Set
 */
final class ExclusionType
{
    /** Geographical location exclusion. For example, you would use a location exclusion to exclude a state or metropolitan area from a country target. */
    const Location = 'Location';
}
