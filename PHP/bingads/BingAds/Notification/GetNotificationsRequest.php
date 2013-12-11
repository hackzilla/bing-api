<?php

namespace BingAds\Notification;

/**
 * Get notifications that have not been consumed for the accounts to which the user has access. Users with roles such as aggregator, client admin, and client view who manage multiple accounts for one or more customers will get notifications for all accounts.
 * @link http://msdn.microsoft.com/en-us/library/hh211522(v=MSADS.80).aspx GetNotificationsRequest Request Object
 */
final class GetNotificationsRequest
{
    /**
     * The types of notifications to return. You can specify one or more types. For possible values, see NotificationType.
     * @var NotificationType
     */
    public $NotificationTypes;

    /**
     * A value in the range of 1 through 1,000 that specifies the number of notifications to return in the result.
     * @var int
     */
    public $TopN;
}
