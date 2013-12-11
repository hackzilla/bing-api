<?php

namespace BingAds\CampaignManagement;

/**
 * Defines a specific device target with bid adjustment.
 * @link http://msdn.microsoft.com/en-us/library/dn249988(v=msads.90).aspx DeviceOSTargetBid Data Object
 */
final class DeviceOSTargetBid
{
    /**
     * The percent amount by which to adjust the base bid for the specified device target.
     * @var int
     */
    public $BidAdjustment;

    /**
     * The name of the device to target. The following are the possible device names that you can specify.
     * @var string
     */
    public $DeviceName;

    /**
     * The specific operating system (OS) of the device to target. To target all operating systems that the device supports, set to null. The following are the possible smartphone operating systems that you can target.
     * @var string[]
     */
    public $OSNames;
}
