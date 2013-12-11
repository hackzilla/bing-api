<?php

namespace BingAds\CampaignManagement;

/**
 * Defines a keyword.
 * @link http://msdn.microsoft.com/en-us/library/bb671833(v=msads.80).aspx Keyword Data Object
 */
final class Keyword
{
    /**
     * The bid to use when the user's query and the keyword match by using a broad match comparison. A broad match results when words in the keyword or phrase are present in the user's query; however, the word order can vary. For more information, see Match Type and Bid Values.
     * @var Bid
     */
    public $BroadMatchBid;

    /**
     * The bid to use when the keywords that the service extracts from the content page matches the keyword by using an exact match comparison. An exact match results when all of the words in the keyword or phrase exactly match the user's query.
     * @var Bid
     */
    public $ContentMatchBid;

    /**
     * The editorial review status of the keyword, which indicates whether the keyword is pending review, has been approved, or has been disapproved.
     * @var KeywordEditorialStatus
     */
    public $EditorialStatus;

    /**
     * The bid to use when the user's query and the keyword match by using an exact match comparison. An exact match results when all of the words in the keyword or phrase exactly match the user's query.
     * @var Bid
     */
    public $ExactMatchBid;

    /**
     * The system-generated identifier of the keyword.
     * @var long
     */
    public $Id;

    /**
     * Not supported. If you add or update the list of negative keywords, the call will not fail; however, the negative keywords will be ignored. To add negative keywords at the ad group and campaign levels, call the SetNegativeKeywordsToAdGroups and SetNegativeKeywordsToCampaigns operations.
     * @var string[]
     */
    public $NegativeKeywords;

    /**
     * The string to use as the substitution value in an ad if the ad's title, text, display URL, or destination URL contains the {Param1:default} dynamic substitution string.
     * @var string
     */
    public $Param1;

    /**
     * The string to use as the substitution value in an ad if the title, text, display URL, or destination URL contains the {Param2:default} dynamic substitution string.
     * @var string
     */
    public $Param2;

    /**
     * The string to use as the substitution value in an ad if the title, text, display URL, or destination URL contains the {Param3:default} dynamic substitution string.
     * @var string
     */
    public $Param3;

    /**
     * The bid value to use when the user's query and the keyword match by using a phrase match. A phrase match results when all of the words in the keyword or phrase are present in the user's query and are in the same order.
     * @var Bid
     */
    public $PhraseMatchBid;

    /**
     * The keyword's status. When you add a keyword, you can set the keyword's status to Active or Paused. By default, the status is set to Active.
     * @var KeywordStatus
     */
    public $Status;

    /**
     * The keyword text. The text can contain a maximum of 100 characters. You should specify the keyword in the locale of the Language value that you specified for the ad group to which the keyword belongs.
     * @var string
     */
    public $Text;
}
