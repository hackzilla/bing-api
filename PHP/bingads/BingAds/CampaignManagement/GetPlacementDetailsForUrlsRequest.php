<?php

namespace BingAds\CampaignManagement;

/**
 * Gets details about the sizes and types of media that the specified publisher websites support.
 * @link http://msdn.microsoft.com/en-us/library/dd796802(v=MSADS.80).aspx GetPlacementDetailsForUrlsRequest Request Object
 */
final class GetPlacementDetailsForUrlsRequest
{
    /**
     * An array of URLs from the publisher websites where you want to display your text ads.
     * @var string[]
     */
    public $Urls;
}
