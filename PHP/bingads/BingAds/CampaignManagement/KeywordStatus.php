<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the possible status values of a keyword.
 * @link http://msdn.microsoft.com/en-us/library/bb671482(v=msads.80).aspx KeywordStatus Value Set
 */
final class KeywordStatus
{
    /** The keyword can be used to match user search queries. */
    const Active = 'Active';

    /** The keyword cannot be used to match user search queries until the owner resumes it. */
    const Paused = 'Paused';

    /** This status is for internal use only. Because all Get operations do not return deleted objects, you will not see an object with this status. */
    const Deleted = 'Deleted';

    /** The keyword is undergoing editorial review or has failed editorial review. To determine which, see KeywordEditorialStatus. */
    const Inactive = 'Inactive';
}
