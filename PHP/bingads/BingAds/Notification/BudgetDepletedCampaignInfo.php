<?php

namespace BingAds\Notification;

/**
 * Defines an object that identifies when the campaign's budget balance reached 0 (zero).
 * @link http://msdn.microsoft.com/en-us/library/hh211513(v=msads.80).aspx BudgetDepletedCampaignInfo Data Object
 */
final class BudgetDepletedCampaignInfo extends CampaignInfo
{
    /**
     * The currency that the budget uses. For possible values, see CurrencyType.
     * @var string
     */
    public $CurrencyCode;

    /**
     * The date and time that the budget reached 0 (zero) and the campaign was paused. The value is in Coordinated Universal Time (UTC).
     * @var dateTime
     */
    public $BudgetDepletedDate;
}
