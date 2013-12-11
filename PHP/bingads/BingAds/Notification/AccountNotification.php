<?php

namespace BingAds\Notification;

/**
 * Defines the account to which the notification applies. All notifications derive from this object.
 * @link http://msdn.microsoft.com/en-us/library/hh211512(v=msads.80).aspx AccountNotification Data Object
 */
class AccountNotification extends Notification
{
    /**
     * The identifier of the account to which the notification applies.
     * @var long
     */
    public $AccountId;

    /**
     * The system-generated account number that is used to identify the account in the Bing Ads web application. The account number takes the form Xnnnnnnn, where nnnnnnn is a series of digits.
     * @var string
     */
    public $AccountNumber;
}
