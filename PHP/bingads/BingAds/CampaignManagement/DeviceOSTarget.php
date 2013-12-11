<?php

namespace BingAds\CampaignManagement;

/**
 * Defines an object that contains the list of device types and operating systems to target.
 * @link http://msdn.microsoft.com/en-us/library/hh527704(v=msads.80).aspx DeviceOSTarget Data Object
 */
final class DeviceOSTarget
{
    /**
     * A list of DeviceOS objects that contains the devices and operating systems to target.
     * @var DeviceOS[]
     */
    public $DeviceOSList;
}
