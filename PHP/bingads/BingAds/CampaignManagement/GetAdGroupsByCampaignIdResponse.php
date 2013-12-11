<?php

namespace BingAds\CampaignManagement;

/**
 * Response object for the GetAdGroupsByCampaignId service operation.
 * @link http://msdn.microsoft.com/en-us/library/bb671869(v=MSADS.80).aspx GetAdGroupsByCampaignIdResponse Response Object
 */
final class GetAdGroupsByCampaignIdResponse
{
    /**
     * An array of AdGroup objects that represents the retrieved ad groups. If the specified campaign contains no ad groups, an empty array is returned.
     * @var AdGroup[]
     */
    public $AdGroups;
}
