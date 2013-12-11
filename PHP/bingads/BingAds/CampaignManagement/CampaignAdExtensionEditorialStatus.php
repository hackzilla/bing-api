<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the possible editorial status values of an ad extension.
 * @link http://msdn.microsoft.com/en-us/library/jj134397(v=msads.80).aspx CampaignAdExtensionEditorialStatus Value Set
 */
final class CampaignAdExtensionEditorialStatus
{
    /** The ad extension passed editorial review. */
    const Active = 'Active';

    /** The ad extension failed editorial review. */
    const Disapproved = 'Disapproved';

    /** The ad extension is undergoing editorial review. */
    const Inactive = 'Inactive';

    /** The ad extension is partially approved. The ad extension will serve in the countries where it passed editorial review. */
    const ActiveLimited = 'ActiveLimited';
}
