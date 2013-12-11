<?php

namespace BingAds\CampaignManagement;

/**
 * Deletes one or more campaigns from the specified account.
 * @link http://msdn.microsoft.com/en-us/library/bb671864(v=MSADS.80).aspx DeleteCampaignsRequest Request Object
 */
final class DeleteCampaignsRequest
{
    /**
     * The identifier of the account that contains the campaigns to delete.
     * @var long
     */
    public $AccountId;

    /**
     * A maximum of 100 campaign identifiers to delete. After deleting a campaign, you cannot access the object by using any Get operation, such as GetCampaignsByIds.
     * @var long[]
     */
    public $CampaignIds;
}
