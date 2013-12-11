<?php

namespace BingAds\CampaignManagement;

/**
 * Response object for the GetAdRotationByAdGroupIds service operation.
 * @link http://msdn.microsoft.com/en-us/library/jj219948(v=MSADS.80).aspx GetAdRotationByAdGroupIdsResponse Response Object
 */
final class GetAdRotationByAdGroupIdsResponse
{
    /**
     * An array of AdRotation objects that identify the type of ad rotation that is applied to the ad group. The items in the array correspond directly to the ad groups specified in the request. If an ad group ID in the request is not valid, the corresponding item this array is null.
     * @var AdRotation[]
     */
    public $AdRotationByAdGroupIds;
}
