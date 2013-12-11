<?php

namespace BingAds\AdIntelligence;

/**
 * Defines an object that contains the key performance index data for the specified keyword and device.
 * @link http://msdn.microsoft.com/en-us/library/hh921734(v=msads.80).aspx KeywordHistoricalPerformanceByDevice Data Object
 */
final class KeywordHistoricalPerformanceByDevice
{
    /**
     * The keyword to which the keyword performance data applies.
     * @var string
     */
    public $Keyword;

    /**
     * The type of device on which the user entered their search query.
     * @var string
     */
    public $Device;

    /**
     * An array of KeywordKPI objects that contains the performance data. The data is broken out by match type and ad position.
     * @var KeywordKPI[]
     */
    public $KeywordKPIs;
}
