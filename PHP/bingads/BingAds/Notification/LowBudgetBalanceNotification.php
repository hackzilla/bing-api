<?php

namespace BingAds\Notification;

/**
 * Defines a notification object that identifies campaigns whose budget balances are low.
 * @link http://msdn.microsoft.com/en-us/library/hh211503(v=msads.80).aspx LowBudgetBalanceNotification Data Object
 */
final class LowBudgetBalanceNotification extends AccountNotification
{
    /**
     * The identifier of the customer that owns the account.
     * @var long
     */
    public $CustomerId;

    /**
     * An array of LowBudgetBalanceCampaignInfo objects that identifies the campaigns in the account whose budget balances are low.
     * @var LowBudgetBalanceCampaignInfo[]
     */
    public $AffectedCampaigns;

    /**
     * The name of the account that contains the campaigns.
     * @var string
     */
    public $AccountName;
}
