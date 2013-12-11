<?php

namespace BingAds\CampaignManagement;

/**
 * Defines a fault object for campaign analytics operations that process batch input.
 * @link http://msdn.microsoft.com/en-us/library/gg985422(v=msads.80).aspx AnalyticsApiFaultDetail Data Object
 */
final class AnalyticsApiFaultDetail extends ApplicationFault
{
    /**
     * An array of GoalError objects that identify the goals within a batch of goals that caused the operation to fail. Each object contains the details that explain why the goal caused the failure.
     * @var GoalError[]
     */
    public $GoalErrors;

    /**
     * An array of OperationError objects that contains the details that explain why the service operation failed when the error is not related to a specific goal in the batch of goals.
     * @var OperationError[]
     */
    public $OperationErrors;
}
