<?php
// Generated on 10/23/2013 5:21:57 AM

namespace BingAds\CustomerBilling;

/**
 * Defines the possible formats in which to generate the billing document.
 * @link http://msdn.microsoft.com/en-us/library/ee704172(v=msads.90).aspx DataType Value Set
 */
final class DataType
{
    /** Use XML format. */
    const Xml = 'Xml';

    /** Use PDF format. */
    const Pdf = 'Pdf';
}

/**
 * Defines an error object that contains the details that explain why the service operation failed.
 * @link http://msdn.microsoft.com/en-us/library/dn169104(v=msads.90).aspx AdApiError Data Object
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
 * Defines the base object from which all fault detail objects derive.
 * @link http://msdn.microsoft.com/en-us/library/dn169107(v=msads.90).aspx ApplicationFault Data Object
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
 * Defines a fault object that operations return when generic errors occur, such as an authentication error.
 * @link http://msdn.microsoft.com/en-us/library/dn169105(v=msads.90).aspx AdApiFaultDetail Data Object
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
 * Defines a fault object that operations return when web service-specific errors occur, such as when the request message contains incomplete or invalid data.
 * @link http://msdn.microsoft.com/en-us/library/dn169108(v=msads.90).aspx ApiFault Data Object
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
 * @link http://msdn.microsoft.com/en-us/library/dn169102(v=msads.90).aspx ApiBatchFault Data Object
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
 * Defines an error object that identifies the item within the batch of items in the request message that caused the operation to fail, and describes the reason for the failure.
 * @link http://msdn.microsoft.com/en-us/library/dn169101(v=msads.90).aspx BatchError Data Object
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
 * Defines a billing document.
 * @link http://msdn.microsoft.com/en-us/library/dn469177(v=msads.90).aspx BillingDocument Data Object
 */
final class BillingDocument
{
    /**
     * The billing document.
     * @var base64Binary
     */
    public $Data;

    /**
     * The identifier of the billing document.
     * @var long
     */
    public $Id;

    /**
     * The format of the billing document.
     * @var DataType
     */
    public $Type;
}

/**
 * Defines a billing document identification object that contains information about a billing document, such as the billing document identifier, billing document amount, and account identifier.
 * @link http://msdn.microsoft.com/en-us/library/dn469176(v=msads.90).aspx BillingDocumentInfo Data Object
 */
final class BillingDocumentInfo
{
    /**
     * The identifier of the account for which the billing document was generated.
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
     * The amount of the billing document.
     * @var double
     */
    public $Amount;

    /**
     * The currency of the billing document. For possible values, see Currencies.
     * @var string
     */
    public $CurrencyCode;

    /**
     * The date of the billing document.
     * @var dateTime
     */
    public $DocumentDate;

    /**
     * An identifier of the billing document.
     * @var long
     */
    public $DocumentId;
}

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

/**
 * Defines an error object that contains the details that explain why the service operation failed.
 * @link http://msdn.microsoft.com/en-us/library/dn169103(v=msads.90).aspx OperationError Data Object
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
 * Gets a list of objects that contains billing document identification information, for example the billing document identifier, amount, and account identifier.This operation will not return billing documents associated with Yahoo!-managed accounts.
 * @link http://msdn.microsoft.com/en-us/library/dn451271(v=msads.90).aspx GetBillingDocumentsInfoRequest Request Object
 */
final class GetBillingDocumentsInfoRequest
{
    /**
     * A list of identifiers of the accounts whose billing document information you want to get.
     * @var long[]
     */
    public $AccountIds;

    /**
     * The start date to use for specifying the billing documents to get.
     * @var dateTime
     */
    public $StartDate;

    /**
     * The end date to use for specifying the billing documents to get.
     * @var dateTime
     */
    public $EndDate;
}

/**
 * Response object for the GetBillingDocumentsInfo service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn451271(v=msads.90).aspx GetBillingDocumentsInfoResponse Response Object
 */
final class GetBillingDocumentsInfoResponse
{
    /**
     * The list of billing document information objects that were retrieved.
     * @var BillingDocumentInfo[]
     */
    public $BillingDocumentsInfo;
}

/**
 * Gets the specified billing documents.This operation will not return billing documents associated with Yahoo!-managed accounts.
 * @link http://msdn.microsoft.com/en-us/library/dn451265(v=msads.90).aspx GetBillingDocumentsRequest Request Object
 */
final class GetBillingDocumentsRequest
{
    /**
     * A list of identifiers of the billing documents to get. To get a list of identifiers, call the GetBillingDocumentsInfo operation.
     * @var long[]
     */
    public $DocumentIds;

    /**
     * The format to use to generate the billing document. For example, you can generate the billing document in PDF or XML format.
     * @var DataType
     */
    public $Type;
}

/**
 * Response object for the GetBillingDocuments service operation.
 * @link http://msdn.microsoft.com/en-us/library/dn451265(v=msads.90).aspx GetBillingDocumentsResponse Response Object
 */
final class GetBillingDocumentsResponse
{
    /**
     * The list of billing documents that were retrieved.
     * @var BillingDocument[]
     */
    public $BillingDocuments;
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
     * @var BillingDocument[]
     */
    public $BillingDocuments;
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
 * @link http://msdn.microsoft.com/en-us/library/dn451269(v=msads.90).aspx GetInsertionOrdersByAccountRequest Request Object
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
 * @link http://msdn.microsoft.com/en-us/library/dn451269(v=msads.90).aspx GetInsertionOrdersByAccountResponse Response Object
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
     * @var BillingDocument[]
     */
    public $BillingDocuments;
}

/**
 * Gets the amount spent by the account in the specified month.
 * @link http://msdn.microsoft.com/en-us/library/dn451264(v=msads.90).aspx GetAccountMonthlySpendRequest Request Object
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
 * @link http://msdn.microsoft.com/en-us/library/dn451264(v=msads.90).aspx GetAccountMonthlySpendResponse Response Object
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
