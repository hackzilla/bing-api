<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the size and type of media that the publisher website supports for ad placements.
 * @link http://msdn.microsoft.com/en-us/library/dd796936(v=msads.80).aspx PlacementDetail Data Object
 */
final class PlacementDetail
{
    /**
     * Not supported.
     * @var ImpressionsPerDayRange
     */
    public $ImpressionsRangePerDay;

    /**
     * The URL of the publisher's website. This is the same URL that you passed to the GetPlacementDetailsForUrls operation.
     * @var string
     */
    public $PathName;

    /**
     * The identifier of the publisher.
     * @var long
     */
    public $PlacementId;

    /**
     * An array of MediaType objects that contains the size and type of media that the publisher website supports.
     * @var MediaType[]
     */
    public $SupportedMediaTypes;
}
