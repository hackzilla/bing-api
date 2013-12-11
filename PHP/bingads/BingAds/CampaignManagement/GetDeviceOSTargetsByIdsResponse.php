<?php

namespace BingAds\CampaignManagement;

/**
 * Response object for the GetDeviceOSTargetsByIds service operation.
 * @link http://msdn.microsoft.com/en-us/library/hh527725(v=MSADS.80).aspx GetDeviceOSTargetsByIdsResponse Response Object
 */
final class GetDeviceOSTargetsByIdsResponse
{
    /**
     * A list of TargetAssociation objects that contains the identifier of the target and the list of devices that it targets. If the target does not target devices, the DeviceOSTarget element is null.
     * @var TargetAssociation[]
     */
    public $TargetAssociations;
}
