<?php

namespace BingAds\AdIntelligence;

/**
 * Defines an object that contains the keyword and the estimated position in the search results for each match type.
 * @link http://msdn.microsoft.com/en-us/library/gg986826(v=msads.80).aspx KeywordEstimatedPosition Data Object
 */
final class KeywordEstimatedPosition
{
    /**
     * The keyword to which the estimates apply.
     * @var string
     */
    public $Keyword;

    /**
     * An array of EstimatedPositionAndTraffic objects that contains the position in the search results that the specified maximum bid value could yield.
     * @var EstimatedPositionAndTraffic[]
     */
    public $EstimatedPositions;
}
