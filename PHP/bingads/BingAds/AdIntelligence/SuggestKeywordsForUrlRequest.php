<?php

namespace BingAds\AdIntelligence;

/**
 * Suggests possible keywords for the content located at the specified URL.
 * @link http://msdn.microsoft.com/en-us/library/gg670953(v=MSADS.80).aspx SuggestKeywordsForUrlRequest Request Object
 */
final class SuggestKeywordsForUrlRequest
{
    /**
     * The URL of the webpage to scan for possible keywords. The URL can contain a maximum of 2,000 characters.
     * @var string
     */
    public $Url;

    /**
     * The language used by the website.
     * @var string
     */
    public $Language;

    /**
     * A positive integer value that specifies the maximum number of keywords to return. The maximum value that you can specify is 200.
     * @var int
     */
    public $MaxKeywords;

    /**
     * A filter value that limits the keywords that the service returns to those that have a confidence score that is greater than or equal to the specified score. For example, you can specify that you want the operation to return only keywords that have a confidence score of at least 80 percent (0.8).
     * @var double
     */
    public $MinConfidenceScore;

    /**
     * A value that determines whether the results exclude brand keywords. To exclude brand keywords in the result, set to true. The default is false.
     * @var boolean
     */
    public $ExcludeBrand;
}
