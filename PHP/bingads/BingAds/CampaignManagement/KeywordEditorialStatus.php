<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the editorial review status values of a keyword.
 * @link http://msdn.microsoft.com/en-us/library/cc565085(v=msads.80).aspx KeywordEditorialStatus Value Set
 */
final class KeywordEditorialStatus
{
    /** The keyword passed editorial review. */
    const Active = 'Active';

    /** The keyword failed editorial review. To determine the reason why the keyword was disapproved and whether it's appealable, call the GetEditorialReasonsByIds operation. */
    const Disapproved = 'Disapproved';

    /** One or more elements of the keyword is undergoing editorial review. */
    const Inactive = 'Inactive';
}
