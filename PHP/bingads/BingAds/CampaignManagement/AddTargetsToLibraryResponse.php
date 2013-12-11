<?php

namespace BingAds\CampaignManagement;

/**
 * Response object for the AddTargetsToLibrary service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn277526(v=msads.90).aspx AddTargetsToLibraryResponse Response Object
 */
final class AddTargetsToLibraryResponse
{
    /**
     * An array of long values that contains the identifiers of the targets that were added to your target library.
     * @var long[]
     */
    public $TargetIds;
}
