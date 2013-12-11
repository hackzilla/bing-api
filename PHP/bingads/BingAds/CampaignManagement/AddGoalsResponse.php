<?php

namespace BingAds\CampaignManagement;

/**
 * Response object for the AddGoals service operation.
 * @link http://msdn.microsoft.com/en-us/library/gg985272(v=MSADS.80).aspx AddGoalsResponse Response Object
 */
final class AddGoalsResponse
{
    /**
     * An array of GoalResult objects. Each object contains the identifier of the goal that was added and the identifiers of the steps that make up the goal.
     * @var GoalResult[]
     */
    public $GoalResults;
}
