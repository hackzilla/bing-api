<?php

namespace BingAds\Notification;

/**
 * Defines an object that identifies the campaign whose budget balance is low or has reached 0 (zero).
 * @link http://msdn.microsoft.com/en-us/library/hh211510(v=msads.80).aspx CampaignInfo Data Object
 */
class CampaignInfo
{
    /**
     * The identifier of the campaign.
     * @var long
     */
    public $CampaignId;

    /**
     * The name of the campaign.
     * @var string
     */
    public $CampaignName;

    /**
     * The balance of the budget at the time of the event.
     * @var double
     */
    public $BudgetAmount;
}
