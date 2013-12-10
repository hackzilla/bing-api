<?php
// Generated on 8/9/2013 5:26:28 AM

namespace BingAds\CustomerBilling;

/**
 * Defines the possible formats in which to generate the invoice.
 * @link http://msdn.microsoft.com/en-us/library/ee704172(v=msads.80).aspx DataType Value Set
 */
final class DataType
{
    /** Use XML format. */
    const Xml = 'Xml';

    /** Use PDF format. */
    const Pdf = 'Pdf';
}

/**
 * Defines an invoice identification object that contains information about an invoice, such as the invoice identifier, invoice amount, and account identifier.
 * @link http://msdn.microsoft.com/en-us/library/ee704159(v=msads.80).aspx InvoiceInfo Data Object
 */
final class InvoiceInfo
{
    /**
     * The identifier of the account for which the invoice was generated.
     * @var long
     */
    public $AccountId;

    /**
     * The account name.
     * @var string
     */
    public $AccountName;

    /**
     * The account number.
     * @var string
     */
    public $AccountNumber;

    /**
     * The amount of the invoice.
     * @var double
     */
    public $Amount;

    /**
     * The currency of the invoice. For possible values, see Currency Codes.
     * @var string
     */
    public $CurrencyCode;

    /**
     * The date of the invoice.
     * @var dateTime
     */
    public $InvoiceDate;

    /**
     * An identifier of the invoice.
     * @var long
     */
    public $InvoiceId;
}

/**
 * Defines an error object that identifies the item within the batch of items in the request message that caused the operation to fail, and describes the reason for the failure.
 * @link http://msdn.microsoft.com/en-us/library/dn169101(v=msads.80).aspx BatchError Data Object
 */
final class BatchError
{
    /**
     * A numeric error code that identifies the error.
     * @var int
     */
    public $Code;

    /**
     * A message that provides additional details about the batch error. This string can be empty.
     * @var string
     */
    public $Details;

    /**
     * The zero-based index of the item in the batch of items in the request message that failed.
     * @var int
     */
    public $Index;

    /**
     * A message that describes the error.
     * @var string
     */
    public $Message;
}

/**
 * Defines a fault object that operations return when web service-specific errors occur, such as when the request message contains incomplete or invalid data.
 * @link http://msdn.microsoft.com/en-us/library/dn169108(v=msads.80).aspx ApiFault Data Object
 */
class ApiFault extends ApplicationFault
{
    /**
     * @var OperationError[]
     */
    public $OperationErrors;
}

/**
 * Defines a fault object that operations return when web service-specific errors occur, such as when the request message contains incomplete or invalid data.
 * @link http://msdn.microsoft.com/en-us/library/dn169102(v=msads.80).aspx ApiBatchFault Data Object
 */
final class ApiBatchFault extends ApiFault
{
    /**
     * An array of BatchError objects that identifies the items in the batch of items in the request message that caused the operation to fail. Each object contains the details that explain why the item caused the failure.
     * @var BatchError[]
     */
    public $BatchErrors;
}

/**
 * Defines an error object that contains the details that explain why the service operation failed.
 * @link http://msdn.microsoft.com/en-us/library/dn169103(v=msads.80).aspx OperationError Data Object
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
 * Defines an error object that contains the details that explain why the service operation failed.
 * @link http://msdn.microsoft.com/en-us/library/dn169104(v=msads.80).aspx AdApiError Data Object
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
 * @link http://msdn.microsoft.com/en-us/library/dn169105(v=msads.80).aspx AdApiFaultDetail Data Object
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
 * Defines a billing invoice.
 * @link http://msdn.microsoft.com/en-us/library/bb672036(v=msads.80).aspx Invoice Data Object
 */
final class Invoice
{
    /**
     * The invoice.
     * @var base64Binary
     */
    public $Data;

    /**
     * The identifier of the invoice.
     * @var long
     */
    public $Id;

    /**
     * The format of the invoice.
     * @var DataType
     */
    public $Type;
}

/**
 * Defines an insertion order.
 * @link http://msdn.microsoft.com/en-us/library/ff728378(v=msads.80).aspx InsertionOrder Data Object
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

/**
 * Defines the base object from which all fault detail objects derive.
 * @link http://msdn.microsoft.com/en-us/library/dn169107(v=msads.80).aspx ApplicationFault Data Object
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
 * Gets a list of invoice information objects for the specified months. The objects contain a limited set of details about an invoice, such as its identifier, invoice amount, and account identifier. To get the complete details of an invoice, call the GetInvoices operation.
 * @link http://msdn.microsoft.com/en-us/library/bb671643(v=MSADS.80).aspx GetInvoicesInfoRequest Request Object
 */
final class GetInvoicesInfoRequest
{
    /**
     * A list of identifiers of the accounts whose invoice information you want to get.
     * @var long[]
     */
    public $AccountIds;

    /**
     * The start date to use for specifying the invoices to get.
     * @var dateTime
     */
    public $StartDate;

    /**
     * The end date to use for specifying the invoices to get.
     * @var dateTime
     */
    public $EndDate;
}

/**
 * Response object for the GetInvoicesInfo service operation.
 * @link http://msdn.microsoft.com/en-us/library/bb671643(v=MSADS.80).aspx GetInvoicesInfoResponse Response Object
 */
final class GetInvoicesInfoResponse
{
    /**
     * The list of InvoiceInfo objects that were retrieved.
     * @var InvoiceInfo[]
     */
    public $InvoicesInfo;
}

/**
 * Gets the specified invoices.
 * @link http://msdn.microsoft.com/en-us/library/bb671746(v=MSADS.80).aspx GetInvoicesRequest Request Object
 */
final class GetInvoicesRequest
{
    /**
     * A list of identifiers of the invoices to get. To get a list of identifiers, call the GetInvoicesInfo operation.
     * @var long[]
     */
    public $InvoiceIds;

    /**
     * The format to use to generate the invoice. For example, you can generate the invoice in PDF or XML format.
     * @var DataType
     */
    public $Type;
}

/**
 * Response object for the GetInvoices service operation.
 * @link http://msdn.microsoft.com/en-us/library/bb671746(v=MSADS.80).aspx GetInvoicesResponse Response Object
 */
final class GetInvoicesResponse
{
    /**
     * The list of invoices that were retrieved.
     * @var Invoice[]
     */
    public $Invoices;
}

final class GetDisplayInvoicesRequest
{
    /**
     * @var long[]
     */
    public $InvoiceIds;

    /**
     * @var DataType
     */
    public $Type;
}

final class GetDisplayInvoicesResponse
{
    /**
     * @var Invoice[]
     */
    public $Invoices;
}

final class AddInsertionOrderRequest
{
    /**
     * @var InsertionOrder
     */
    public $InsertionOrder;
}

final class AddInsertionOrderResponse
{
    /**
     * @var long
     */
    public $InsertionOrderId;

    /**
     * @var dateTime
     */
    public $CreateTime;
}

final class UpdateInsertionOrderRequest
{
    /**
     * @var InsertionOrder
     */
    public $InsertionOrder;
}

final class UpdateInsertionOrderResponse
{
    /**
     * @var dateTime
     */
    public $LastModifiedTime;
}

/**
 * Gets a list of insertion orders for the specified account.
 * @link http://msdn.microsoft.com/en-us/library/ff728372(v=MSADS.80).aspx GetInsertionOrdersByAccountRequest Request Object
 */
final class GetInsertionOrdersByAccountRequest
{
    /**
     * The identifier of the account that contains the insertion orders to get.
     * @var long
     */
    public $AccountId;

    /**
     * A list of identifiers of the insertion orders to get. To get all insertion orders, including those that have expired, set to NULL.
     * @var long[]
     */
    public $InsertionOrderIds;
}

/**
 * Response object for the GetInsertionOrdersByAccount service operation.
 * @link http://msdn.microsoft.com/en-us/library/ff728372(v=MSADS.80).aspx GetInsertionOrdersByAccountResponse Response Object
 */
final class GetInsertionOrdersByAccountResponse
{
    /**
     * A list of insertion orders.
     * @var InsertionOrder[]
     */
    public $InsertionOrders;
}

final class GetKOHIOInvoicesRequest
{
    /**
     * @var string[]
     */
    public $InvoiceIds;
}

final class GetKOHIOInvoicesResponse
{
    /**
     * @var Invoice[]
     */
    public $Invoices;
}

/**
 * Gets the amount spent by the account in the specified month.
 * @link http://msdn.microsoft.com/en-us/library/gg241242(v=MSADS.80).aspx GetAccountMonthlySpendRequest Request Object
 */
final class GetAccountMonthlySpendRequest
{
    /**
     * @var long
     */
    public $AccountId;

    /**
     * @var dateTime
     */
    public $MonthYear;
}

/**
 * Response object for the GetAccountMonthlySpend service operation.
 * @link http://msdn.microsoft.com/en-us/library/gg241242(v=MSADS.80).aspx GetAccountMonthlySpendResponse Response Object
 */
final class GetAccountMonthlySpendResponse
{
    /**
     * The amount spent by the account in the specified period.
     * @var double
     */
    public $Amount;
}


?>
