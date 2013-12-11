<?php

namespace BingAds\CampaignManagement;

/**
 * Deletes one or more ads in a specified ad group.
 * @link http://msdn.microsoft.com/en-us/library/dn236310(v=msads.90).aspx DeleteAdsRequest Request Object
 */
final class DeleteAdsRequest
{
    /**
     * The ID of the ad group that contains the ads to delete.
     * @var long
     */
    public $AdGroupId;

    /**
     * The IDs of the ads to delete. You can specify a maximum of 50 IDs.
     * @var long[]
     */
    public $AdIds;
}
