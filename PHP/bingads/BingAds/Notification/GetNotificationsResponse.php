<?php

namespace BingAds\Notification;

/**
 * Response object for the GetNotifications service operation.
 * @link http://msdn.microsoft.com/en-us/library/hh211522(v=MSADS.80).aspx GetNotificationsResponse Response Object
 */
final class GetNotificationsResponse
{
    /**
     * The list of Notification objects that matches your request criteria or an empty list if there are no notifications that match your criteria.
     * @var Notification[]
     */
    public $Notifications;
}
