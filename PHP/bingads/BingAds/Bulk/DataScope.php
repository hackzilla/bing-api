<?php

namespace BingAds\Bulk;

/**
 * Defines the scope or types of data to download.
 * @link http://msdn.microsoft.com/en-us/library/dn249976(v=msads.90).aspx DataScope Value Set
 */
final class DataScope
{
    /** Download the entity attributes data. */
    const EntityData = 'EntityData';

    /** Download the performance data. */
    const EntityPerformanceData = 'EntityPerformanceData';

    /** Download the quality score data. */
    const QualityScoreData = 'QualityScoreData';

    /** Download the bid suggestions data. */
    const BidSuggestionsData = 'BidSuggestionsData';
}
