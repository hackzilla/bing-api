<?php

namespace BingAds\Notification;

/**
 * Defines a notification object that identifies campaigns whose budget balance has reached 0 (zero).
 * @link http://msdn.microsoft.com/en-us/library/hh211508(v=msads.80).aspx BudgetDepletedNotification Data Object
 */
final class BudgetDepletedNotification extends AccountNotification
{
    /**
     * An array of BudgetDepletedCampaignInfo objects that identifies the campaigns in the account whose budget balance has reached 0 (zero).
     * @var BudgetDepletedCampaignInfo[]
     */
    public $AffectedCampaigns;

    /**
     * The name of the account.
     * @var string
     */
    public $AccountName;
}
