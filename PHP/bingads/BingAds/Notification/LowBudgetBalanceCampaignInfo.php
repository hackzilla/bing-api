<?php

namespace BingAds\Notification;

/**
 * Defines an object that estimates the current balance of the campaign whose budget balance is low.
 * @link http://msdn.microsoft.com/en-us/library/hh211504(v=msads.80).aspx LowBudgetBalanceCampaignInfo Data Object
 */
final class LowBudgetBalanceCampaignInfo extends CampaignInfo
{
    /**
     * Not supported.
     * @var double
     */
    public $EstimatedBudgetBalance;

    /**
     * Not supported.
     * @var int
     */
    public $EstimatedImpressions;
}
