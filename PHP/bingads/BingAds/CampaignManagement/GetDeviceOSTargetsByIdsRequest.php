<?php

namespace BingAds\CampaignManagement;

/**
 * Gets the devices that the specified targets target.
 * @link http://msdn.microsoft.com/en-us/library/hh527725(v=MSADS.80).aspx GetDeviceOSTargetsByIdsRequest Request Object
 */
final class GetDeviceOSTargetsByIdsRequest
{
    /**
     * A list of identifiers of the targets to get. The targets should target devices.
     * @var long[]
     */
    public $TargetIds;
}
