<?php

namespace BingAds\CampaignManagement;

/**
 * Updates the target object with a list of devices to target.
 * @link http://msdn.microsoft.com/en-us/library/hh527724(v=MSADS.80).aspx UpdateDeviceOSTargetsRequest Request Object
 */
final class UpdateDeviceOSTargetsRequest
{
    /**
     * A list of TargetAssociation objects that contains the identifier of the target to update with the specified devices.
     * @var TargetAssociation[]
     */
    public $TargetAssociations;
}
