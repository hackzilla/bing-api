<?php

namespace BingAds\CampaignManagement;

/**
 * Defines a Campaign Analytics goal and the steps that make up the goal.
 * @link http://msdn.microsoft.com/en-us/library/gg985285(v=msads.80).aspx Goal Data Object
 */
final class Goal
{
    /**
     * The costs associated with the conversion. For example, you can include the sales tax and shipping fees with the conversion data. You can specify one or more costs to track.
     * @var CostModel
     */
    public $CostModel;

    /**
     * The number of days in which an assist must occur in order for it to be considered an assist.
     * @var DaysApplicableForConversion
     */
    public $DaysApplicableForConversion;

    /**
     * The system-generated identifier of the goal.
     * @var long
     */
    public $Id;

    /**
     * The name of the goal. The name must be unique among all goals specified for the account. The name must contain a minimum of one character and can contain a maximum of 1,200 characters.
     * @var string
     */
    public $Name;

    /**
     * Determines whether the conversion is revenue related, and if so, whether the revenue is a fixed or variable value. If the revenue is fixed, the object contains the fixed revenue value.
     * @var RevenueModel
     */
    public $RevenueModel;

    /**
     * The list of steps that make up the goal. A goal can contain a maximum of six steps. At a minimum, you must include a conversion step.
     * @var Step[]
     */
    public $Steps;

    /**
     * For internal use only.
     * @var int
     */
    public $YEventId;
}
