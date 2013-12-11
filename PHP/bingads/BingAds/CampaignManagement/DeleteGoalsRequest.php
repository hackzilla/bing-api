<?php

namespace BingAds\CampaignManagement;

/**
 * Deletes the specified goals from the specified account.
 * @link http://msdn.microsoft.com/en-us/library/gg985266(v=MSADS.80).aspx DeleteGoalsRequest Request Object
 */
final class DeleteGoalsRequest
{
    /**
     * The identifier of the account that contains the goals to delete.
     * @var long
     */
    public $AccountId;

    /**
     * The identifiers of the goals to delete.
     * @var long[]
     */
    public $GoalIds;
}
