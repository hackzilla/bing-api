<?php

namespace BingAds\CampaignManagement;

/**
 * Adds targets to your target library.
 * @link http://msdn.microsoft.com/en-us/library/dd796810(v=MSADS.80).aspx AddTargetsToLibraryRequest Request Object
 */
final class AddTargetsToLibraryRequest
{
    /**
     * An array of Target objects to add to the target library.
     * @var Target[]
     */
    public $Targets;
}
