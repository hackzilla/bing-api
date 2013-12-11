<?php

namespace BingAds\AdIntelligence;

/**
 * Defines an object that contains the identifier of the keyword and the suggested bid value for the keyword and match type.The estimates are not a prediction or guarantee of future performance.
 * @link http://msdn.microsoft.com/en-us/library/gg986827(v=msads.90).aspx KeywordIdEstimatedBid Data Object
 */
final class KeywordIdEstimatedBid
{
    /**
     * The identifier of the keyword to which the suggested bid applies.
     * @var long
     */
    public $KeywordId;

    /**
     * An object that contains the keyword string and the suggested bid value for each match type.
     * @var KeywordEstimatedBid
     */
    public $KeywordEstimatedBid;
}
