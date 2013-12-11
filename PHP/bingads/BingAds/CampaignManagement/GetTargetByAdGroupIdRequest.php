<?php

namespace BingAds\CampaignManagement;

/**
 * Gets target information for an ad group.
 * @link http://msdn.microsoft.com/en-us/library/bb672058(v=MSADS.80).aspx GetTargetByAdGroupIdRequest Request Object
 */
final class GetTargetByAdGroupIdRequest
{
    /**
     * The identifier of the ad group that contains the targets that you want to get.
     * @var long
     */
    public $AdGroupId;

    /**
     * The version of the location codes to return if the target contains location targets. The following are the possible values. If null, the default is the oldest supported version.
     * @var string
     */
    public $LocationTargetVersion;
}
