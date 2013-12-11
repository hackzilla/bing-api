<?php

namespace BingAds\CampaignManagement;

/**
 * Defines a keyword.
 * @link http://msdn.microsoft.com/en-us/library/bb671833(v=msads.90).aspx Keyword Data Object
 */
final class Keyword
{
    /**
     * The bid to use when the user's query and the keyword match.
     * @var Bid
     */
    public $Bid;

    /**
     * The URL of the webpage to take the user to when they click the ad. The keyword's destination URL is used if specified; otherwise, the ad's destination URL is used.
     * @var string
     */
    public $DestinationUrl;

    /**
     * The editorial review status of the keyword, which indicates whether the keyword is pending review, has been approved, or has been disapproved.
     * @var KeywordEditorialStatus
     */
    public $EditorialStatus;

    /**
     * The list of key and value strings for forward compatibility. This element can be used to avoid otherwise breaking changes when new elements are added in future releases.
     */
    public $ForwardCompatibilityMap;

    /**
     * The system-generated identifier of the keyword.
     * @var long
     */
    public $Id;

    /**
     * The type of match to compare the keyword and the user's search query.
     * @var MatchType
     */
    public $MatchType;

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
     * The keyword's status. By default, the status is set to Active.
     * @var KeywordStatus
     */
    public $Status;

    /**
     * The keyword text. The text can contain a maximum of 100 characters. You should specify the keyword in the locale of the Language value that you specified for the ad group to which the keyword belongs.
     * @var string
     */
    public $Text;
}
