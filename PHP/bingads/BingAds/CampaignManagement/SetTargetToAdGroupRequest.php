<?php

namespace BingAds\CampaignManagement;

/**
 * Associates the specified target with the specified ad group.
 * @link http://msdn.microsoft.com/en-us/library/dn277508(v=msads.90).aspx SetTargetToAdGroupRequest Request Object
 */
final class SetTargetToAdGroupRequest
{
    /**
     * The identifier of the ad group to associate with the target.
     * @var long
     */
    public $AdGroupId;

    /**
     * The identifier of the target to associate with the ad group.
     * @var long
     */
    public $TargetId;
}
