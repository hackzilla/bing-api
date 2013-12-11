<?php

namespace BingAds\AdIntelligence;

/**
 * Defines an object that contains the identifier of a keyword and the estimated search results position for the keyword and match type.The estimates are not a prediction or guarantee of future performance.
 * @link http://msdn.microsoft.com/en-us/library/gg986824(v=msads.90).aspx KeywordIdEstimatedPosition Data Object
 */
final class KeywordIdEstimatedPosition
{
    /**
     * The identifier of the keyword to which the estimated position applies.
     * @var long
     */
    public $KeywordId;

    /**
     * An object that contains the keyword string and estimated position in the search results given the specified maximum bid.
     * @var KeywordEstimatedPosition
     */
    public $KeywordEstimatedPosition;
}
