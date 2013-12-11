<?php

namespace BingAds\CampaignManagement;

/**
 * Defines an error object that identifies the goal within the batch of goals in the request message that caused the operation to fail, as well as the reason for the failure.
 * @link http://msdn.microsoft.com/en-us/library/gg985421(v=msads.80).aspx GoalError Data Object
 */
final class GoalError
{
    /**
     * An array of BatchError objects that identifies the goal that failed and the reason for the failure. The Index element of the BatchError object identifies the goal that failed.
     * @var BatchError[]
     */
    public $BatchErrors;

    /**
     * The zero-based index of the goal in the request to which the step errors apply.
     * @var int
     */
    public $Index;

    /**
     * An array of BatchError objects that identifies the step within the goal that failed, and the reason for the failure. The Index element of the BatchError object identifies the step that failed.
     * @var BatchError[]
     */
    public $StepErrors;
}
