<?php

namespace BingAds\Optimizer;

/**
 * Defines an object that contains a suggested keyword and bid value.
 * @link http://msdn.microsoft.com/en-us/library/jj649133(v=msads.80).aspx KeywordOpportunity Data Object
 */
final class KeywordOpportunity extends Opportunity
{
    /**
     * The identifier of the ad group to apply the suggested keyword to.
     * @var long
     */
    public $AdGroupId;

    /**
     * The identifier of the campaign that owns the ad group.
     * @var long
     */
    public $CampaignId;

    /**
     * An indicator of competitive bids for this keyword relative to all search keywords. The competition score ranges from 0 to 1.00, where 0 indicates low competition and 1.00 indicates that there is a high number of advertisers competing for this keyword.
     * @var double
     */
    public $Competition;

    /**
     * The match type that the bid applies to. The following are the possible match-type values.
     * @var int
     */
    public $MatchType;

    /**
     * The estimated monthly volume of user search queries that may match the suggested keyword for the corresponding MatchType element.
     * @var long
     */
    public $MonthlySearches;

    /**
     * The suggested bid that may result in your ads serving on the first page of the search query results.
     * @var double
     */
    public $SuggestedBid;

    /**
     * The suggested keyword.
     * @var string
     */
    public $SuggestedKeyword;
}
