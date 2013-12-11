<?php

namespace BingAds\Notification;

/**
 * Defines a notification object that identifies the account whose insertion order expired.
 * @link http://msdn.microsoft.com/en-us/library/hh211524(v=msads.80).aspx ExpiredInsertionOrderNotification Data Object
 */
final class ExpiredInsertionOrderNotification extends AccountNotification
{
    /**
     * The name of the customer that owns or manages the account whose insertion order expired.
     * @var string
     */
    public $BillToCustomerName;
}
