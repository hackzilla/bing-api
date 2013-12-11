<?php

namespace BingAds\AdIntelligence;

/**
 * Response object for the SuggestKeywordsFromExistingKeywords service operation.
 * @link http://msdn.microsoft.com/en-us/library/gg712250(v=MSADS.80).aspx SuggestKeywordsFromExistingKeywordsResponse Response Object
 */
final class SuggestKeywordsFromExistingKeywordsResponse
{
    /**
     * An array of KeywordSuggestion objects. The array contains an item for each keyword specified in the request. The object contains a list of suggested keywords that may perform better than the specified keyword.
     * @var KeywordSuggestion[]
     */
    public $KeywordSuggestions;
}
