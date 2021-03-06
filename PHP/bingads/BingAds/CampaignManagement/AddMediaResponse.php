<?php

namespace BingAds\CampaignManagement;

/**
 * Response object for the AddMedia service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn277518(v=msads.90).aspx AddMediaResponse Response Object
 */
final class AddMediaResponse
{
    /**
     * The identifiers of the media that you added to the library. You use the identifier to set the appropriate media ID field in the LocationAdExtension object.
     * @var long[]
     */
    public $MediaIds;
}
