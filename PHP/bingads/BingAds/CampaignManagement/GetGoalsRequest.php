<?php

namespace BingAds\CampaignManagement;

/**
 * Gets the Campaign Analytics goals that are defined for the specified account.
 * @link http://msdn.microsoft.com/en-us/library/gg985273(v=MSADS.80).aspx GetGoalsRequest Request Object
 */
final class GetGoalsRequest
{
    /**
     * The identifier of the account whose Campaign Analytics goals you want to get.
     * @var long
     */
    public $AccountId;
}
