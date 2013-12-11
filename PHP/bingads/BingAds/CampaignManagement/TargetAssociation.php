<?php

namespace BingAds\CampaignManagement;

/**
 * Defines an object that identifies a target in your target library and the list of devices that it targets.
 * @link http://msdn.microsoft.com/en-us/library/hh527726(v=msads.80).aspx TargetAssociation Data Object
 */
final class TargetAssociation
{
    /**
     * The devices and operating systems to target.
     * @var DeviceOSTarget
     */
    public $DeviceOSTarget;

    /**
     * The identifier of the target to apply the device targets to.
     * @var long
     */
    public $Id;
}
