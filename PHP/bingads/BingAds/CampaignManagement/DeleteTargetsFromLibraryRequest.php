<?php

namespace BingAds\CampaignManagement;

/**
 * Removes targets from your target library.
 * @link http://msdn.microsoft.com/en-us/library/dn277507(v=msads.90).aspx DeleteTargetsFromLibraryRequest Request Object
 */
final class DeleteTargetsFromLibraryRequest
{
    /**
     * An array of long values that specifies the identifiers of the targets to remove from the target library.
     * @var long[]
     */
    public $TargetIds;
}
