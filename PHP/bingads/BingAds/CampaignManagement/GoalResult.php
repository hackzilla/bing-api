<?php

namespace BingAds\CampaignManagement;

/**
 * Defines an object that contains the identifier of a goal that was added and the identifiers of each step in the goal.
 * @link http://msdn.microsoft.com/en-us/library/gg985280(v=msads.80).aspx GoalResult Data Object
 */
final class GoalResult
{
    /**
     * The identifier of the Campaign Analytics goal that you added.
     * @var long
     */
    public $GoalId;

    /**
     * The identifiers of the steps that make up the goal. The identifiers are in the same order as you specified them in the request.
     * @var long[]
     */
    public $StepIds;
}
