<?php

namespace BingAds\CampaignManagement;

/**
 * Associates the specified target with the specified campaign.
 * @link http://msdn.microsoft.com/en-us/library/dn277512(v=msads.90).aspx SetTargetToCampaignRequest Request Object
 */
final class SetTargetToCampaignRequest
{
    /**
     * The identifier of the campaign to associate with the target.
     * @var long
     */
    public $CampaignId;

    /**
     * The identifier of the target to associate with the campaign.
     * @var long
     */
    public $TargetId;
}
