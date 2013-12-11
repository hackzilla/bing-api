<?php

namespace BingAds\AdIntelligence;

/**
 * Defines an object that contains a suggested keyword and a confidence score. The confidence score indicates the probability that the keyword would match a user's search query.
 * @link http://msdn.microsoft.com/en-us/library/gg670952(v=msads.90).aspx KeywordAndConfidence Data Object
 */
final class KeywordAndConfidence
{
    /**
     * The suggested keyword.
     * @var string
     */
    public $SuggestedKeyword;

    /**
     * A score from 0.0 to 1.0 that indicates the probability that the keyword would match a user's search query.
     * @var double
     */
    public $ConfidenceScore;
}
