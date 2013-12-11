<?php

namespace BingAds\CampaignManagement;

/**
 * Defines an error object that identifies the ad or keyword with the batch of ads or keywords that failed editorial review.
 * @link http://msdn.microsoft.com/en-us/library/cc197190(v=msads.80).aspx EditorialError Data Object
 */
final class EditorialError
{
    /**
     * Reserved for future use.
     * @var boolean
     */
    public $Appealable;

    /**
     * A numeric error code that identifies the error.
     * @var int
     */
    public $Code;

    /**
     * The text that caused the ad to be disapproved.
     * @var string
     */
    public $DisapprovedText;

    /**
     * A symbolic string constant that identifies the error. For example, UserIsNotAuthorized.
     * @var string
     */
    public $ErrorCode;

    /**
     * The zero-based index of the ad or keyword within the batch of ads or keywords in the request message that failed.
     * @var int
     */
    public $Index;

    /**
     * A message that describes the error.
     * @var string
     */
    public $Message;

    /**
     * The corresponding country or region for the flagged editorial issue.
     * @var string
     */
    public $PublisherCountry;
}
