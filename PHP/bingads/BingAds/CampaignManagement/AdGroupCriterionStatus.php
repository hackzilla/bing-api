<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the possible status values that determine whether to apply the criterion to the ad group.
 * @link http://msdn.microsoft.com/en-us/library/jj689542(v=msads.80).aspx AdGroupCriterionStatus Value Set
 */
final class AdGroupCriterionStatus
{
    /** Apply the criterion to the ad group. */
    const Active = 'Active';

    /** Do not apply the criterion to the ad group. */
    const Paused = 'Paused';

    /** The criterion was deleted. Note that the Get operations will not return deleted objects. */
    const Deleted = 'Deleted';
}
