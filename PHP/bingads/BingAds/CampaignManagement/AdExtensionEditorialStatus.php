<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the editorial review status values of an ad extension.
 * @link http://msdn.microsoft.com/en-us/library/dn249989(v=msads.90).aspx AdExtensionEditorialStatus Value Set
 */
final class AdExtensionEditorialStatus
{
    /** The ad extension passed editorial review. */
    const Active = 'Active';

    /** The ad extension failed editorial review. */
    const Disapproved = 'Disapproved';

    /** One or more elements of the ad extension is undergoing editorial review. */
    const Inactive = 'Inactive';

    /** The ad extension passed editorial review in one or more markets, and one or more elements of the ad extension is undergoing editorial review in another market. For example the ad extension passed editorial review for Canada and is still pending review in the United States. */
    const ActiveLimited = 'ActiveLimited';
}
