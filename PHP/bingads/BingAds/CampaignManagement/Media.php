<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the base object of media.
 * @link http://msdn.microsoft.com/en-us/library/dn195580(v=msads.90).aspx Media Data Object
 */
class Media
{
    /**
     * The system generated identifier of the media.
     * @var long
     */
    public $Id;

    /**
     * This read-only element is the name of the subclass. For example, when retrieving an Image object, the MediaType is Image.
     * @var string
     */
    public $MediaType;

    /**
     * The type of media to add to the library. The accepted values are Image and Icon.
     * @var string
     */
    public $Type;
}
