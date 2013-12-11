<?php

namespace BingAds\CampaignManagement;

/**
 * Removes the target association for the specified ad group.
 * @link http://msdn.microsoft.com/en-us/library/dd797074(v=MSADS.80).aspx DeleteTargetFromAdGroupRequest Request Object
 */
final class DeleteTargetFromAdGroupRequest
{
    /**
     * The identifier of the ad group from which to remove the target association.
     * @var long
     */
    public $AdGroupId;
}
