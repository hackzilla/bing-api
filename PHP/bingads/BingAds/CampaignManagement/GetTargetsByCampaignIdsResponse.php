<?php

namespace BingAds\CampaignManagement;

/**
 * Response object for the GetTargetsByCampaignIds service operation.
 * @link http://msdn.microsoft.com/en-us/library/dd796993(v=MSADS.80).aspx GetTargetsByCampaignIdsResponse Response Object
 */
final class GetTargetsByCampaignIdsResponse
{
    /**
     * An array of Target objects that corresponds directly to the list of campaign identifiers in the request. If the campaign does not contain a reference to a target object, the corresponding target element in the array is NULL.
     * @var Target[]
     */
    public $Targets;
}
