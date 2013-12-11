<?php

namespace BingAds\CampaignManagement;

/**
 * Response object for the AddTargetsToLibrary service operation.
 * @link http://msdn.microsoft.com/en-us/library/dd796810(v=MSADS.80).aspx AddTargetsToLibraryResponse Response Object
 */
final class AddTargetsToLibraryResponse
{
    /**
     * An array of long values that contains the identifiers of the targets that were added to your target library.
     * @var long[]
     */
    public $TargetIds;
}
