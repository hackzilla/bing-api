<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the editorial review status values of an ad.
 * @link http://msdn.microsoft.com/en-us/library/cc565084(v=msads.80).aspx AdEditorialStatus Value Set
 */
final class AdEditorialStatus
{
    /** The ad passed editorial review. */
    const Active = 'Active';

    /** The ad failed editorial review. To determine the reason why the ad was disapproved and whether it's appealable, call the GetEditorialReasonsByIds operation. */
    const Disapproved = 'Disapproved';

    /** One or more elements of the ad is undergoing editorial review. */
    const Inactive = 'Inactive';
}
