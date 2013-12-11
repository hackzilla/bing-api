<?php

namespace BingAds\CampaignManagement;

/**
 * Set the negative site URLs of the specified ad groups.
 * @link http://msdn.microsoft.com/en-us/library/hh299885(v=MSADS.80).aspx SetNegativeSitesToAdGroupsRequest Request Object
 */
final class SetNegativeSitesToAdGroupsRequest
{
    /**
     * The identifier of the campaign that contains the ad groups.
     * @var long
     */
    public $CampaignId;

    /**
     * An array of AdGroupNegativeSites objects that identify the ad groups to update with the specified negative site URLs.
     * @var AdGroupNegativeSites[]
     */
    public $AdGroupNegativeSites;
}
