<?php

namespace BingAds\CampaignManagement;

/**
 * Response object for the AddImage service operation.
 * @link http://msdn.microsoft.com/en-us/library/jj721608(v=MSADS.80).aspx AddImageResponse Response Object
 */
final class AddImageResponse
{
    /**
     * The identifier of the image or icon that you added to the library. You use the identifier to set the appropriate media ID field in the LocationAdExtension object.
     * @var long
     */
    public $MediaId;
}
