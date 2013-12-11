<?php

namespace BingAds\Optimizer;

/**
 * Response object for the GetKeywordOpportunities service operation.
 * @link http://msdn.microsoft.com/en-us/library/jj649131(v=MSADS.80).aspx GetKeywordOpportunitiesResponse Response Object
 */
final class GetKeywordOpportunitiesResponse
{
    /**
     * A list of KeywordOpportunity objects that identifies a suggested keyword and bid value. The list will be empty if there are no suggestions, which may occur if the ad group does not contain existing ads and keywords.
     * @var KeywordOpportunity[]
     */
    public $Opportunities;
}
