<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the editorial review status values of an ad group criterion.
 * @link http://msdn.microsoft.com/en-us/library/dn195643(v=msads.90).aspx AdGroupCriterionEditorialStatus Value Set
 */
final class AdGroupCriterionEditorialStatus
{
    /** The criterion passed editorial review. */
    const Active = 'Active';

    /** The criterion failed editorial review. */
    const Disapproved = 'Disapproved';

    /** The criterion is undergoing editorial review. */
    const Inactive = 'Inactive';
}
