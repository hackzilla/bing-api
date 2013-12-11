<?php

namespace BingAds\CampaignManagement;

/**
 * Response object for the AddAdGroupCriterions service operation.
 * @link http://msdn.microsoft.com/en-us/library/jj689547(v=MSADS.80).aspx AddAdGroupCriterionsResponse Response Object
 */
final class AddAdGroupCriterionsResponse
{
    /**
     * A list of identifiers that identify the criterion that were added. The list of identifiers corresponds directly to the list of criterion in the request.
     * @var long[]
     */
    public $AdGroupCriterionIds;
}
