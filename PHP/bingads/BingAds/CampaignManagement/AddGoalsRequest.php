<?php

namespace BingAds\CampaignManagement;

/**
 * Adds one or more Campaign Analytics goals that campaigns in the account can use to track user activity and conversions.
 * @link http://msdn.microsoft.com/en-us/library/gg985272(v=MSADS.80).aspx AddGoalsRequest Request Object
 */
final class AddGoalsRequest
{
    /**
     * The identifier of the account to which you want to add the analytics goals.
     * @var long
     */
    public $AccountId;

    /**
     * The goals to add to the account. You can add a maximum of six unique goals to an account.
     * @var Goal[]
     */
    public $Goals;
}
