<?php

namespace BingAds\CampaignManagement;

/**
 * Defines media type information for a website.
 * @link http://msdn.microsoft.com/en-us/library/dd797128(v=msads.90).aspx MediaType Data Object
 */
final class MediaType
{
    /**
     * The media dimensions.
     * @var Dimension[]
     */
    public $Dimensions;

    /**
     * The name of the media type.
     * @var string
     */
    public $Name;
}
