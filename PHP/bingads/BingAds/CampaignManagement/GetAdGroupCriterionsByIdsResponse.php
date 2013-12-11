<?php

namespace BingAds\CampaignManagement;

/**
 * Response object for the GetAdGroupCriterionsByIds service operation.
 * @link http://msdn.microsoft.com/en-us/library/jj739471(v=MSADS.80).aspx GetAdGroupCriterionsByIdsResponse Response Object
 */
final class GetAdGroupCriterionsByIdsResponse
{
    /**
     * The list of criterions that correspond directly to the identifiers specified in the request. If an identifier in the list is not valid, the corresponding item in the response is set to null.
     * @var AdGroupCriterion[]
     */
    public $AdGroupCriterions;
}
