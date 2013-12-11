<?php

namespace BingAds\AdIntelligence;

/**
 * Defines an object that contains the identifier of a keyword and the estimated search results position for the keyword and match type.
 * @link http://msdn.microsoft.com/en-us/library/gg986824(v=msads.80).aspx KeywordIdEstimatedPosition Data Object
 */
final class KeywordIdEstimatedPosition
{
    /**
     * The identifier of the keyword to which the estimated position applies.
     * @var long
     */
    public $KeywordId;

    /**
     * An object that contains the keyword string and position in the search results that the specified maximum bid value could yield for each keyword and match type.
     * @var KeywordEstimatedPosition
     */
    public $KeywordEstimatedPosition;
}
