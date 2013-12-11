<?php

namespace BingAds\CampaignManagement;

/**
 * Defines a step of a campaign analytics goal.
 * @link http://msdn.microsoft.com/en-us/library/gg985293(v=msads.80).aspx Step Data Object
 */
final class Step
{
    /**
     * The system generated identifier of the step.
     * @var long
     */
    public $Id;

    /**
     * The name of the step. The name must contain a minimum of one character and can contain a maximum of 1,200 characters. The name must be unique among the other step names of the goal.
     * @var string
     */
    public $Name;

    /**
     * The position of this step in relationship to the other steps of the goal.
     * @var int
     */
    public $PositionNumber;

    /**
     * The script that the service generates for this step. For details about how to add the script to your webpage, see Campaign Analytics Scripts.
     * @var string
     */
    public $Script;

    /**
     * The type of step. For example, the conversion step or the lead step. For possible values, see StepType.
     * @var StepType
     */
    public $Type;
}
