<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the possible status values of an ad group.
 * @link http://msdn.microsoft.com/en-us/library/bb671715(v=msads.90).aspx AdGroupStatus Value Set
 */
final class AdGroupStatus
{
    /** The ad group is new. Ads and keywords that you add in this state are not subject to editorial review. */
    const Draft = 'Draft';

    /** The ad group is active, which indicates that the ad group's ads can be served. */
    const Active = 'Active';

    /** The ad group is paused, which indicates that the ad group's ads will not serve. Ads and keywords that you add in this state are subject to editorial review. */
    const Paused = 'Paused';

    /** The ad group expired. This status is set if you specify an end date for the ad group and the end date passes. */
    const Deleted = 'Deleted';
}
