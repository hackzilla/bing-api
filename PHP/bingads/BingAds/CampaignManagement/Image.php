<?php

namespace BingAds\CampaignManagement;

/**
 * Defines an image object that can be added to an account's media library.
 * @link http://msdn.microsoft.com/en-us/library/dn195581(v=msads.80).aspx Image Data Object
 */
final class Image extends Media
{
    /**
     * A base64 string that represents the image or icon to add to the library. The base64 string can contain a maximum of 102,400 characters.
     * @var string
     */
    public $Data;
}
