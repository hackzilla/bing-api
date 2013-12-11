<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the base object of an ad extension.
 * @link http://msdn.microsoft.com/en-us/library/hh527708(v=msads.90).aspx AdExtension Data Object
 */
class AdExtension
{
    /**
     * The list of key and value strings for forward compatibility. This element can be used to avoid otherwise breaking changes when new elements are added in future releases.
     */
    public $ForwardCompatibilityMap;

    /**
     * The system-generated identifier of the ad extension.
     * @var long
     */
    public $Id;

    /**
     * The status of the ad extension.
     * @var AdExtensionStatus
     */
    public $Status;

    /**
     * The type of ad extension. For more information, see Remarks.
     * @var string
     */
    public $Type;

    /**
     * The number of times the contents of the ad extension has been updated. The version is set to 1 when you add the extension and is incremented each time it's revised.
     * @var int
     */
    public $Version;
}
