<?php

namespace BingAds\AdIntelligence;

/**
 * Response object for the GetKeywordCategories service operation.
 * @link http://msdn.microsoft.com/en-us/library/hh921752(v=MSADS.80).aspx GetKeywordCategoriesResponse Response Object
 */
final class GetKeywordCategoriesResponse
{
    /**
     * An array of KeywordCategoryResult objects. Each object contains the keyword and a list of categories to which it belongs. For more information, see Remarks.
     * @var KeywordCategoryResult[]
     */
    public $Result;
}
