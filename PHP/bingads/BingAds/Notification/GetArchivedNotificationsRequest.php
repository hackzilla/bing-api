<?php

namespace BingAds\Notification;

/**
 * Get notifications that occurred during the specified date range for the accounts to which the user has access. Users with roles such as aggregator, client admin, and client view who manage multiple accounts for one or more customers will get notifications for all accounts. The result includes notifications that have been consumed and those that have not been consumed.
 * @link http://msdn.microsoft.com/en-us/library/hh211523(v=MSADS.80).aspx GetArchivedNotificationsRequest Request Object
 */
final class GetArchivedNotificationsRequest
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

    /**
     * The start date and time of the date range. Specify the date in Coordinated Universal Time (UTC).
     * @var dateTime
     */
    public $StartDate;

    /**
     * The end date and time of the date range. Specify the date in Coordinated Universal Time (UTC).
     * @var dateTime
     */
    public $EndDate;
}
