<?php

namespace BingAds\Notification;

/**
 * Defines a notification object that identifies the credit card that is about to expire.
 * @link http://msdn.microsoft.com/en-us/library/hh211499(v=msads.80).aspx CreditCardPendingExpirationNotification Data Object
 */
final class CreditCardPendingExpirationNotification extends AccountNotification
{
    /**
     * The type of credit card. For example, Visa or MasterCard.
     * @var string
     */
    public $CardType;

    /**
     * The last four digits of the credit card number.
     * @var string
     */
    public $LastFourDigits;

    /**
     * The name of the account to which the credit card belongs.
     * @var string
     */
    public $AccountName;
}
