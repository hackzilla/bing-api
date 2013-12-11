<?php

namespace BingAds\CampaignManagement;

/**
 * Response object for the UpdateGoals service operation.
 * @link http://msdn.microsoft.com/en-us/library/gg985282(v=MSADS.80).aspx UpdateGoalsResponse Response Object
 */
final class UpdateGoalsResponse
{
    /**
     * An array of GoalResult objects. Each object contains the identifier of the goal that was updated and the identifiers of the steps that make up the goal.
     * @var GoalResult[]
     */
    public $GoalResults;
}
