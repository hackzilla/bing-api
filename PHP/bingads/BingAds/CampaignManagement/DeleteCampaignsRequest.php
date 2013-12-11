<?php

namespace BingAds\CampaignManagement;

/**
 * Deletes one or more campaigns in a specified account.
 * @link http://msdn.microsoft.com/en-us/library/dn236314(v=msads.90).aspx DeleteCampaignsRequest Request Object
 */
final class DeleteCampaignsRequest
{
    /**
     * The identifier of the account that contains the campaigns to delete.
     * @var long
     */
    public $AccountId;

    /**
     * A maximum of 100 campaign identifiers to delete.
     * @var long[]
     */
    public $CampaignIds;
}
