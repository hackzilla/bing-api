<?php

namespace BingAds\CampaignManagement;

/**
 * Removes the target association for the specified campaign.
 * @link http://msdn.microsoft.com/en-us/library/dd796894(v=MSADS.80).aspx DeleteTargetFromCampaignRequest Request Object
 */
final class DeleteTargetFromCampaignRequest
{
    /**
     * The identifier of the campaign from which to remove the target association.
     * @var long
     */
    public $CampaignId;
}
