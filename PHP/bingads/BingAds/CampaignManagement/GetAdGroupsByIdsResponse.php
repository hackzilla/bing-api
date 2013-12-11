<?php

namespace BingAds\CampaignManagement;

/**
 * Response object for the GetAdGroupsByIds service operation.
 * @link http://msdn.microsoft.com/en-us/library/bb671579(v=MSADS.80).aspx GetAdGroupsByIdsResponse Response Object
 */
final class GetAdGroupsByIdsResponse
{
    /**
     * An array of AdGroup objects that corresponds directly to the ad group identifiers that you specified in the request. If an ad group does not exist, the corresponding element of the array is set to NULL.
     * @var AdGroup[]
     */
    public $AdGroups;
}
