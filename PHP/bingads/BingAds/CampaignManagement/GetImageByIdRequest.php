<?php

namespace BingAds\CampaignManagement;

/**
 * Gets the specified image or icon from an account's media library.
 * @link http://msdn.microsoft.com/en-us/library/jj721612(v=MSADS.80).aspx GetImageByIdRequest Request Object
 */
final class GetImageByIdRequest
{
    /**
     * The identifier of the account that owns the media library.
     * @var long
     */
    public $AccountId;

    /**
     * The identifier of the image or icon to get.
     * @var long
     */
    public $MediaId;
}
