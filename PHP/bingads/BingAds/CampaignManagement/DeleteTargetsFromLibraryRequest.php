<?php

namespace BingAds\CampaignManagement;

/**
 * Removes targets from your target library.
 * @link http://msdn.microsoft.com/en-us/library/dd797104(v=MSADS.80).aspx DeleteTargetsFromLibraryRequest Request Object
 */
final class DeleteTargetsFromLibraryRequest
{
    /**
     * An array of long values that specifies the identifiers of the targets to remove from the target library.
     * @var long[]
     */
    public $TargetIds;
}
