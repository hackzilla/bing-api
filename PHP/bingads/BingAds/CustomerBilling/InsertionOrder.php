<?php

namespace BingAds\CustomerBilling;

/**
 * Defines an insertion order.
 * @link http://msdn.microsoft.com/en-us/library/ff728378(v=msads.90).aspx InsertionOrder Data Object
 */
final class InsertionOrder
{
    /**
     * The identifier of the account to which the insertion order applies.
     * @var long
     */
    public $AccountId;

    /**
     * The running balance of the insertion order. The running balance increases each time an ad in the account is served.
     * @var double
     */
    public $BalanceAmount;

    /**
     * A code that identifies the country/region in which the account operates. For a list of possible country codes, see Country Codes.
     * @var string
     */
    public $BookingCountryCode;

    /**
     * A description of the insertion order. The description is limited to 1,000 characters.
     * @var string
     */
    public $Comment;

    /**
     * The date that the insertion order expires. The end date must be later than the start date. The time portion is ignored.
     * @var dateTime
     */
    public $EndDate;

    /**
     * A system generated identifier that identifies the insertion order.
     * @var long
     */
    public $InsertionOrderId;

    /**
     * An identifier of the last user to update the insertion order.
     * @var long
     */
    public $LastModifiedByUserId;

    /**
     * The date and time that the insertion order was last updated. The value is in Coordinated Universal Time (UTC). For information about the format of the date and time, see the dateTime entry in Primitive XML Data Types.
     * @var dateTime
     */
    public $LastModifiedTime;

    /**
     * A percentage of the budget that has been spent. Specify the percentage as a value from 0 to 100. Notification is sent when the threshold is reached. For example, if you set the threshold to 70, the Billing service sends notification when you have spent 70 percent of the budget.
     * @var double
     */
    public $NotificationThreshold;

    /**
     * Internal use only.
     * @var long
     */
    public $ReferenceId;

    /**
     * The budget for this insertion order. The budget is a hard limit. When the account reaches this limit and there is not another insertion order available, the account's status value is set to Pause.
     * @var double
     */
    public $SpendCapAmount;

    /**
     * The date that the insertion order can begin accruing charges. The start date must be later than the current date. The time portion is ignored.
     * @var dateTime
     */
    public $StartDate;
}
