<?php

namespace BingAds\Notification;

/**
 * Defines the type of notification, as well as the date and time when the event occurred. This is the base class from which account notification objects derive.
 * @link http://msdn.microsoft.com/en-us/library/hh211520(v=msads.80).aspx Notification Data Object
 */
class Notification
{
    /**
     * A system-generated identifier that identifies this notification.
     * @var long
     */
    public $NotificationId;

    /**
     * The data and time that the notification occurred. The value is in Coordinated Universal Time (UTC).
     * @var dateTime
     */
    public $NotificationDate;

    /**
     * The type of notification. For possible values, see NotificationType.
     * @var NotificationType
     */
    public $NotificationType;
}
