<?php

namespace BingAds\CampaignManagement;

/**
 * Updates the specified goals in the specified account.
 * @link http://msdn.microsoft.com/en-us/library/gg985282(v=MSADS.80).aspx UpdateGoalsRequest Request Object
 */
final class UpdateGoalsRequest
{
    /**
     * The identifier of the account whose goals you want to update.
     * @var long
     */
    public $AccountId;

    /**
     * An array of Goal objects that contains the goals to update. The operation updates only those fields that are not NULL.
     * @var Goal[]
     */
    public $Goals;
}
