<?php

namespace BingAds\Notification;

/**
 * Response object for the GetArchivedNotifications service operation.
 * @link http://msdn.microsoft.com/en-us/library/hh211523(v=MSADS.80).aspx GetArchivedNotificationsResponse Response Object
 */
final class GetArchivedNotificationsResponse
{
    /**
     * The list of Notification objects that matches your request criteria or an empty list if there are no notifications that match your criteria.
     * @var Notification[]
     */
    public $Notifications;
}
