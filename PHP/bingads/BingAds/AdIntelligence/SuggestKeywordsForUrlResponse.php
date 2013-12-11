<?php

namespace BingAds\AdIntelligence;

/**
 * Response object for the SuggestKeywordsForUrl service operation.
 * @link http://msdn.microsoft.com/en-us/library/gg670953(v=MSADS.80).aspx SuggestKeywordsForUrlResponse Response Object
 */
final class SuggestKeywordsForUrlResponse
{
    /**
     * An array of KeywordAndConfidence objects that contains the possible keywords found in the content of the specified URL. In addition, the object includes a score that indicates the probability that using the keyword would result in the URL being included in the results of a search query.
     * @var KeywordAndConfidence[]
     */
    public $Keywords;
}
