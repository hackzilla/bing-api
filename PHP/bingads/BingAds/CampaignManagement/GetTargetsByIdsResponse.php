<?php

namespace BingAds\CampaignManagement;

/**
 * Response object for the GetTargetsByIds service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn236304(v=msads.90).aspx GetTargetsByIdsResponse Response Object
 */
final class GetTargetsByIdsResponse
{
    /**
     * An array of Target objects that contains information about the specified targets.
     * @var Target[]
     */
    public $Targets;
}
