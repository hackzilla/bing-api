<?php

namespace BingAds\CampaignManagement;

/**
 * Updates the target information for the specified ad group.
 * @link http://msdn.microsoft.com/en-us/library/bb671653(v=MSADS.80).aspx UpdateTargetRequest Request Object
 */
final class UpdateTargetRequest
{
    /**
     * The identifier of the ad group whose target information will be updated.
     * @var long
     */
    public $AdGroupId;

    /**
     * A Target object that contains the new target information. The Id element of this object identifies the target to update.
     * @var Target
     */
    public $Target;
}
