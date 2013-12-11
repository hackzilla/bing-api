<?php

namespace BingAds\CampaignManagement;

/**
 * Defines an object that specifies the type of device and operating system to target.
 * @link http://msdn.microsoft.com/en-us/library/hh527701(v=msads.80).aspx DeviceOS Data Object
 */
final class DeviceOS
{
    /**
     * The name of the device to target. The following are the possible device names that you can specify.
     * @var string
     */
    public $DeviceName;

    /**
     * The specific OS of the device to target. To target all operating systems that the device supports, set to null.
     * @var string
     */
    public $OSName;
}
