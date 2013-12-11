<?php

namespace BingAds\AdIntelligence;

/**
 * Defines the possible time periods that determine the pool of data that the service uses to get the performance statistics of a keyword.
 * @link http://msdn.microsoft.com/en-us/library/gg670967(v=msads.90).aspx TimeInterval Value Set
 */
final class TimeInterval
{
    /** Use data from the previous calendar month. Note that it can take up to 72 hours for the previous calendar month's data to be available. For example, if you request data on August 1st, 2nd or 3rd, and July's data is not ready, the response will be based on June's data. */
    const Last30Days = 'Last30Days';

    /** Use data from the previous seven days (excluding today's data). */
    const Last7Days = 'Last7Days';

    /** Use data from the previous day. */
    const LastDay = 'LastDay';
}
