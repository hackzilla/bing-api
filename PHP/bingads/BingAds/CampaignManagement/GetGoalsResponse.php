<?php

namespace BingAds\CampaignManagement;

/**
 * Response object for the GetGoals service operation.
 * @link http://msdn.microsoft.com/en-us/library/gg985273(v=MSADS.80).aspx GetGoalsResponse Response Object
 */
final class GetGoalsResponse
{
    /**
     * An array of Goal objects. Each object contains the details of the goal, such as the steps that make up the goal and the revenue model.
     * @var Goal[]
     */
    public $Goals;
}
