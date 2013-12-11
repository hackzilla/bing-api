<?php

namespace BingAds\CampaignManagement;

/**
 * Defines an icon for a business.
 * @link http://msdn.microsoft.com/en-us/library/dd797192(v=msads.80).aspx BusinessImageIcon Data Object
 */
final class BusinessImageIcon
{
    /**
     * Not used. This element must be null.
     * @var long
     */
    public $CustomIconAssetId;

    /**
     * The predefined business icon to display in Bing Maps.
     * @var StandardBusinessIcon
     */
    public $StandardBusinessIcon;
}
