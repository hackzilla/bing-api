<?php
// Generated on 8/9/2013 5:26:26 AM

namespace BingAds\Notification;

/**
 * Defines the possible types of notifications that you can request.
 * @link http://msdn.microsoft.com/en-us/library/hh211519(v=msads.80).aspx NotificationType Value Set
 */
final class NotificationType
{
    /** Request notification about credit cards that are about to expire. This notification occurs 15 days prior to expiration and again one day prior to expiration. */
    const CreditCardPendingExpiration = 'CreditCardPendingExpiration';

    /** Request notification about campaigns whose budget balance has reached 0 (zero). */
    const DepletedBudget = 'DepletedBudget';

    /** Request notification about accounts that have ads and keywords that failed editorial review. Editorial rejection notifications are generated once a day. The timing of when the notifications are generated is undetermined. */
    const EditorialRejection = 'EditorialRejection';

    /** Request notification about credit cards that expired. This notification occurs one day after the card expires. Because credit cards expire at the end of the month, this notification is sent the first day of the month for cards that expired at the end of the previous month. To get notification about when a card is about to expire, see CreditCardPendingExpiration. */
    const ExpiredCreditCard = 'ExpiredCreditCard';

    /** Request notification about insertion orders that expired. */
    const ExpiredInsertionOrder = 'ExpiredInsertionOrder';

    /** Request notification about campaigns whose budget balance is running low. */
    const LowBudgetBalance = 'LowBudgetBalance';
}

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

/**
 * Defines an error object that contains the details that explain why the service operation failed.
 * @link http://msdn.microsoft.com/en-us/library/dn169119(v=msads.80).aspx AdApiError Data Object
 */
final class AdApiError
{
    /**
     * A numeric error code that identifies the error.
     * @var int
     */
    public $Code;

    /**
     * A message that contains additional details about the error. This string can be empty.
     * @var string
     */
    public $Detail;

    /**
     * A symbolic string constant that identifies the error. For example, UserIsNotAuthorized.
     * @var string
     */
    public $ErrorCode;

    /**
     * A message that describes the error.
     * @var string
     */
    public $Message;
}

/**
 * Defines a fault object that operations return when generic errors occur, such as an authentication error.
 * @link http://msdn.microsoft.com/en-us/library/dn169123(v=msads.80).aspx AdApiFaultDetail Data Object
 */
final class AdApiFaultDetail extends ApplicationFault
{
    /**
     * An array of AdApiError objects that contains the details that explain why the service operation failed.
     * @var AdApiError[]
     */
    public $Errors;
}

/**
 * Defines an error object that contains the details that explain why the service operation failed.
 * @link http://msdn.microsoft.com/en-us/library/dn169124(v=msads.80).aspx OperationError Data Object
 */
final class OperationError
{
    /**
     * A numeric error code that identifies the error
     * @var int
     */
    public $Code;

    /**
     * A message that provides additional details about the error. This string can be empty.
     * @var string
     */
    public $Details;

    /**
     * A message that describes the error.
     * @var string
     */
    public $Message;
}

/**
 * Defines a fault object that operations return when web service-specific errors occur, such as when the request message contains incomplete or invalid data.
 * @link http://msdn.microsoft.com/en-us/library/dn169120(v=msads.80).aspx ApiFault Data Object
 */
final class ApiFault extends ApplicationFault
{
    /**
     * @var OperationError[]
     */
    public $OperationErrors;
}

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

/**
 * Defines a notification object that identifies the credit card that expired.
 * @link http://msdn.microsoft.com/en-us/library/hh211516(v=msads.80).aspx ExpiredCreditCardNotification Data Object
 */
final class ExpiredCreditCardNotification extends AccountNotification
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

/**
 * Defines an object that identifies when the campaign's budget balance reached 0 (zero).
 * @link http://msdn.microsoft.com/en-us/library/hh211513(v=msads.80).aspx BudgetDepletedCampaignInfo Data Object
 */
final class BudgetDepletedCampaignInfo extends CampaignInfo
{
    /**
     * The currency that the budget uses. For possible values, see CurrencyType.
     * @var string
     */
    public $CurrencyCode;

    /**
     * The date and time that the budget reached 0 (zero) and the campaign was paused. The value is in Coordinated Universal Time (UTC).
     * @var dateTime
     */
    public $BudgetDepletedDate;
}

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

/**
 * Defines an object that identifies the campaign whose budget balance is low or has reached 0 (zero).
 * @link http://msdn.microsoft.com/en-us/library/hh211510(v=msads.80).aspx CampaignInfo Data Object
 */
class CampaignInfo
{
    /**
     * The identifier of the campaign.
     * @var long
     */
    public $CampaignId;

    /**
     * The name of the campaign.
     * @var string
     */
    public $CampaignName;

    /**
     * The balance of the budget at the time of the event.
     * @var double
     */
    public $BudgetAmount;
}

/**
 * Defines a notification object that indicates that one or more campaigns in the account contain ads or keywords that failed editorial review.
 * @link http://msdn.microsoft.com/en-us/library/hh211505(v=msads.80).aspx EditorialRejectionNotification Data Object
 */
final class EditorialRejectionNotification extends AccountNotification
{
}

/**
 * Defines an object that estimates the current balance of the campaign whose budget balance is low.
 * @link http://msdn.microsoft.com/en-us/library/hh211504(v=msads.80).aspx LowBudgetBalanceCampaignInfo Data Object
 */
final class LowBudgetBalanceCampaignInfo extends CampaignInfo
{
    /**
     * Not supported.
     * @var double
     */
    public $EstimatedBudgetBalance;

    /**
     * Not supported.
     * @var int
     */
    public $EstimatedImpressions;
}

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

/**
 * Defines the base object from which all fault detail objects derive.
 * @link http://msdn.microsoft.com/en-us/library/dn169121(v=msads.80).aspx ApplicationFault Data Object
 */
class ApplicationFault
{
    /**
     * The identifier of the log entry that contains the details of the API call.
     * @var string
     */
    public $TrackingId;
}

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


?>
