<?php

namespace BingAds\CampaignManagement;

/**
 * Response object for the GetPlacementDetailsForUrls service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn277530(v=msads.90).aspx GetPlacementDetailsForUrlsResponse Response Object
 */
final class GetPlacementDetailsForUrlsResponse
{
    /**
     * A two-dimensional array of PlacementDetail objects that contains the identifier of the publisher website and the types and sizes of media that the publisher supports.
     * @var PlacementDetail[]
     */
    public $PlacementDetails;
}
