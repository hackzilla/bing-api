<?php

namespace BingAds\AdIntelligence;

/**
 * Defines an object that contains the key performance index data for the specified keyword.
 * @link http://msdn.microsoft.com/en-us/library/gg986820(v=msads.80).aspx KeywordHistoricalPerformance Data Object
 */
final class KeywordHistoricalPerformance
{
    /**
     * The keyword to which the keyword performance data applies.
     * @var string
     */
    public $Keyword;

    /**
     * An array of KeywordKPI objects that contains the performance data.
     * @var KeywordKPI[]
     */
    public $KeywordKPIs;
}
