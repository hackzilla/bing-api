<?php

namespace BingAds\CampaignManagement;

/**
 * Adds target information to the specified ad group.
 * @link http://msdn.microsoft.com/en-us/library/bb671572(v=MSADS.80).aspx AddTargetRequest Request Object
 */
final class AddTargetRequest
{
    /**
     * The identifier of the ad group that the Target object will be added to.
     * @var long
     */
    public $AdGroupId;

    /**
     * The Target object that contains the target information for the ad group.
     * @var Target
     */
    public $Target;
}
