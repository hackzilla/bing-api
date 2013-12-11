<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the possible status values of a business object.
 * @link http://msdn.microsoft.com/en-us/library/dd797110(v=msads.80).aspx BusinessStatus Value Set
 */
final class BusinessStatus
{
    /** The business object is complete and will be in effect if assigned to a target. */
    const Active = 'Active';

    /** For future use. */
    const Inactive = 'Inactive';

    /** The service is in the process of determining the coordinates of the business. The business object will not be in effect if assigned to a target until the coordinates are determined. */
    const Pending = 'Pending';
}
