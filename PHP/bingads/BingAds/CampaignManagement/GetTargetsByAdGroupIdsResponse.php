<?php

namespace BingAds\CampaignManagement;

/**
 * Response object for the GetTargetsByAdGroupIds service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn236297(v=msads.90).aspx GetTargetsByAdGroupIdsResponse Response Object
 */
final class GetTargetsByAdGroupIdsResponse
{
    /**
     * An array of Target objects that corresponds directly to the list of ad group identifiers in the request. If the ad group does not contain a reference to a target object, the corresponding target element in the array is NULL.
     * @var Target[]
     */
    public $Targets;
}
