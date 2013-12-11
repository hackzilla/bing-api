<?php

namespace BingAds\CampaignManagement;

/**
 * Defines an object that you can use to determine the component of an ad or keyword that failed editorial review, and the reason for the failure.
 * @link http://msdn.microsoft.com/en-us/library/ff728493(v=msads.90).aspx EditorialReason Data Object
 */
final class EditorialReason
{
    /**
     * The component of the ad or keyword that failed editorial review.
     * @var string
     */
    public $Location;

    /**
     * A list of countries where the ad or keyword failed editorial review. The string contains the country's two character country code.
     * @var string[]
     */
    public $PublisherCountries;

    /**
     * A code that identifies the reason for the failure. For a list of possible reason codes, see Editorial Failure Reason Codes.
     * @var int
     */
    public $ReasonCode;

    /**
     * The term that failed editorial review.
     * @var string
     */
    public $Term;
}
