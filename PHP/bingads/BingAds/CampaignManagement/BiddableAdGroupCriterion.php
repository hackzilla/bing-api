<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the conditions that determine whether product ads in the ad group get served. If the conditions are met, the specified bid is used in the auction.
 * @link http://msdn.microsoft.com/en-us/library/jj689538(v=msads.90).aspx BiddableAdGroupCriterion Data Object
 */
final class BiddableAdGroupCriterion extends AdGroupCriterion
{
    /**
     * The bid to use in the auction.
     * @var CriterionBid
     */
    public $CriterionBid;

    /**
     * The URL of the webpage that the user is taken to when they click the ad. The URL can contain a maximum of 1,024 characters.
     * @var string
     */
    public $DestinationUrl;

    /**
     * The criterion's editorial review status. The status indicates whether the criterion is pending review, has been approved, or has been disapproved.
     * @var AdGroupCriterionEditorialStatus
     */
    public $EditorialStatus;

    /**
     * The string to use as the substitution value if DestinationUrl contains {Param1: default}.
     * @var string
     */
    public $Param1;

    /**
     * The string to use as the substitution value if destination URL contains {Param2: default}.
     * @var string
     */
    public $Param2;

    /**
     * The string to use as the substitution value if destination URL contains {Param3: default}.
     * @var string
     */
    public $Param3;
}
