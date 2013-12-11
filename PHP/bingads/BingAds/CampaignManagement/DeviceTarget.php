<?php

namespace BingAds\CampaignManagement;

/**
 * Defines a device target that specifies the types of devices to serve your ads on.
 * @link http://msdn.microsoft.com/en-us/library/ff728451(v=msads.80).aspx DeviceTarget Data Object
 */
final class DeviceTarget
{
    /**
     * A list of device types to service your ads on.
     * @var DeviceType[]
     */
    public $Devices;
}
