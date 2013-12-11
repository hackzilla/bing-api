<?php

namespace BingAds\Optimizer;

/**
 * Defines an object that contains the suggested bid with estimated clicks and impressions opportunities.The bid opportunity is an estimate based on the last 7 days of performance data, and not a prediction or guarantee of future performance.
 * @link http://msdn.microsoft.com/en-us/library/hh802384(v=msads.90).aspx BidOpportunity Data Object
 */
final class BidOpportunity extends Opportunity
{
    /**
     * The identifier of the ad group that owns the keyword.
     * @var long
     */
    public $AdGroupId;

    /**
     * The current keyword bid amount specified for the match type in the MatchType element.
     * @var double
     */
    public $CurrentBid;

    /**
     * The estimated clicks opportunities corresponding to the suggested bid.
     * @var double
     */
    public $EstimatedIncreaseInClicks;

    /**
     * The estimated increase in spend corresponding to the suggested bid.
     * @var double
     */
    public $EstimatedIncreaseInCost;

    /**
     * The estimated impressions opportunities corresponding to the suggested bid.
     * @var long
     */
    public $EstimatedIncreaseInImpressions;

    /**
     * The identifier of the keyword to which the bid opportunity applies.
     * @var long
     */
    public $KeywordId;

    /**
     * The match type to which the suggested bid value applies. The possible values are:
     * @var string
     */
    public $MatchType;

    /**
     * The suggested bid based on the last 7 days of performance history for the corresponding ad group.
     * @var double
     */
    public $SuggestedBid;
}
