<?php

namespace BingAds\CampaignManagement;

/**
 * Adds an image or icon to an account's media library.
 * @link http://msdn.microsoft.com/en-us/library/jj721608(v=MSADS.80).aspx AddImageRequest Request Object
 */
final class AddImageRequest
{
    /**
     * The identifier of the account that owns the media library.
     * @var long
     */
    public $AccountId;

    /**
     * A base64 string that represents the image or icon to add to the library. The base64 string can contain a maximum of 102,400 characters.
     * @var string
     */
    public $Data;

    /**
     * The type of media to add to the library. For possible values, see ImageType.
     * @var ImageType
     */
    public $Type;
}
