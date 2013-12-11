<?php

namespace BingAds\CampaignManagement;

/**
 * Response object for the GetTargetsInfoFromLibrary service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn236308(v=msads.90).aspx GetTargetsInfoFromLibraryResponse Response Object
 */
final class GetTargetsInfoFromLibraryResponse
{
    /**
     * An array of TargetInfo objects that contain information about the targets in your library.
     * @var TargetInfo[]
     */
    public $TargetsInfo;
}
