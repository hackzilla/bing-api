<?php

namespace BingAds\CampaignManagement;

/**
 * Deletes one or more ads from an ad group.
 * @link http://msdn.microsoft.com/en-us/library/bb671870(v=MSADS.80).aspx DeleteAdsRequest Request Object
 */
final class DeleteAdsRequest
{
    /**
     * The ID of the ad group that contains the ads to delete.
     * @var long
     */
    public $AdGroupId;

    /**
     * The IDs of the ads to delete. You can specify a maximum of 50 IDs. After deleting an ad, you cannot access the object using any Get operation, such as GetAdsByIds.
     * @var long[]
     */
    public $AdIds;
}
