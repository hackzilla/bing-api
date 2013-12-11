<?php

namespace BingAds\AdIntelligence;

/**
 * Defines an object that contains the identifier of the keyword and the suggested minimum bid value for the keyword and match type.
 * @link http://msdn.microsoft.com/en-us/library/gg986827(v=msads.80).aspx KeywordIdEstimatedBid Data Object
 */
final class KeywordIdEstimatedBid
{
    /**
     * The identifier of the keyword to which the suggested minimum bid applies.
     * @var long
     */
    public $KeywordId;

    /**
     * An object that contains the keyword string and the suggested minimum bid value for each match type.
     * @var KeywordEstimatedBid
     */
    public $KeywordEstimatedBid;
}
