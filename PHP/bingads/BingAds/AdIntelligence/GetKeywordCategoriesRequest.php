<?php

namespace BingAds\AdIntelligence;

/**
 * Gets the keyword categories to which the specified keywords belong.
 * @link http://msdn.microsoft.com/en-us/library/hh921752(v=MSADS.80).aspx GetKeywordCategoriesRequest Request Object
 */
final class GetKeywordCategoriesRequest
{
    /**
     * An array of keywords for which you want to determine the possible keyword categories that each keyword belongs to. The array can contain a maximum of 1,000 keywords, and each keyword can contain a maximum of 100 characters.
     * @var string[]
     */
    public $Keywords;

    /**
     * The language in which the keywords are written. You must set this element to English.
     * @var string
     */
    public $Language;

    /**
     * The country code of the country/region to use as the source of the category data. You must set this element to US.
     * @var string
     */
    public $PublisherCountry;

    /**
     * The number of categories to include in the results. The maximum number of categories that you can request is 5.
     * @var int
     */
    public $MaxCategories;
}
