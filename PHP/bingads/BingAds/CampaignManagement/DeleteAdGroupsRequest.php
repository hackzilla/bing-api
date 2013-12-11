<?php

namespace BingAds\CampaignManagement;

/**
 * Deletes one or more ad groups from a campaign.
 * @link http://msdn.microsoft.com/en-us/library/bb671757(v=MSADS.80).aspx DeleteAdGroupsRequest Request Object
 */
final class DeleteAdGroupsRequest
{
    /**
     * The campaign that contains the ad groups that will be deleted.
     * @var long
     */
    public $CampaignId;

    /**
     * A maximum of 1,000 ad group identifiers to delete. After deleting an ad group, you cannot access the object by using any Get operation, such as GetAdGroupsByIds.
     * @var long[]
     */
    public $AdGroupIds;
}
