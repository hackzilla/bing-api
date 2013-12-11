<?php

namespace BingAds\AdIntelligence;

/**
 * Suggests keywords that could perform better than the specified keywords.
 * @link http://msdn.microsoft.com/en-us/library/dn336990(v=msads.90).aspx SuggestKeywordsFromExistingKeywordsRequest Request Object
 */
final class SuggestKeywordsFromExistingKeywordsRequest
{
    /**
     * An array of keywords for which you want to get suggested keywords that could perform better. The array can contain a maximum of 1,000 keywords, and each keyword can contain a maximum of 100 characters.
     * @var string[]
     */
    public $Keywords;

    /**
     * The language in which the keyword is written.
     * @var string
     */
    public $Language;

    /**
     * The country codes of the countries/regions to use as the source of data for determining the suggested keywords.
     * @var string[]
     */
    public $PublisherCountries;

    /**
     * The maximum number of keyword suggestions to return per specified keyword. If SuggestionType is set to 4, you can request a maximum of 200 suggestions per keyword; otherwise the maximum suggestions that you can request is 100.
     * @var int
     */
    public $MaxSuggestionsPerKeyword;

    /**
     * The provider to use to generate the keyword suggestions. For a list of possible providers, the language and country restrictions of each provider, and the default provider by country, see Remarks.
     * @var int
     */
    public $SuggestionType;

    /**
     * A Boolean value that determines whether to remove duplicate keywords from the list of suggested keywords. To remove duplicates, set to true. The default is false.
     * @var boolean
     */
    public $RemoveDuplicates;

    /**
     * A value that determines whether the results exclude brand keywords. To exclude brand keywords in the result, set to true. The default is false.
     * @var boolean
     */
    public $ExcludeBrand;

    /**
     * The identifier of the ad group for suggested keywords.
     * @var long
     */
    public $AdGroupId;

    /**
     * The identifier of the campaign for suggested keywords.
     * @var long
     */
    public $CampaignId;
}
