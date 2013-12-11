<?php

namespace BingAds\CampaignManagement;

/**
 * Response object for the AddAdGroupCriterions service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn277499(v=msads.90).aspx AddAdGroupCriterionsResponse Response Object
 */
final class AddAdGroupCriterionsResponse
{
    /**
     * A list of identifiers that identify the criterion that were added. The list of identifiers corresponds directly to the list of criterion in the request.
     * @var long[]
     */
    public $AdGroupCriterionIds;
}
