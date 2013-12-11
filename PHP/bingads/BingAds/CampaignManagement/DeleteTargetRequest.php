<?php

namespace BingAds\CampaignManagement;

/**
 * Deletes the target within the specified ad group.
 * @link http://msdn.microsoft.com/en-us/library/bb672024(v=MSADS.80).aspx DeleteTargetRequest Request Object
 */
final class DeleteTargetRequest
{
    /**
     * The identifier of the ad group that contains the target that will be deleted.
     * @var long
     */
    public $AdGroupId;
}
