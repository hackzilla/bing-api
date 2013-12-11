<?php

namespace BingAds\Optimizer;

/**
 * Response object for the GetBidOpportunities service operation.
 * @link http://msdn.microsoft.com/en-us/library/hh802389(v=MSADS.80).aspx GetBidOpportunitiesResponse Response Object
 */
final class GetBidOpportunitiesResponse
{
    /**
     * An array of BidOpportunity objects that identifies the keywords whose clicks and impressions may increase if you were to apply the recommended match-type bid value. To apply the recommended bid value, call the ApplyOpportunities operation.
     * @var BidOpportunity[]
     */
    public $Opportunities;
}
