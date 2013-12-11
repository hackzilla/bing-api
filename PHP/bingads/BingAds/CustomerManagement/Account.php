<?php

namespace BingAds\CustomerManagement;

/**
 * Defines an account. This is the base object from which the advertising and publishing accounts derive.
 * @link http://msdn.microsoft.com/en-us/library/bb671588(v=msads.80).aspx Account Data Object
 */
class Account
{
    /**
     * The type of the account. For example, whether the account is an advertiser or publisher account.
     * @var AccountType
     */
    public $AccountType;

    /**
     * The identifier of the customer that is billed for the charges that the account generates. This is either the reseller that manages this account on behalf of the owner or the identifier of the customer that owns the account.
     * @var long
     */
    public $BillToCustomerId;

    /**
     * The code that identifies the country/region in which the account operates. The service uses the country/region information for billing purposes.
     * @var string
     */
    public $CountryCode;

    /**
     * The type of currency that is used to settle the account. The service uses the currency information for billing purposes.
     * @var CurrencyType
     */
    public $CurrencyType;

    /**
     * The financial status of the account. For example, the status can indicate whether the account is in good standing or is past due.
     * @var AccountFinancialStatus
     */
    public $AccountFinancialStatus;

    /**
     * The system generated identifier of the account.
     * @var long
     */
    public $Id;

    /**
     * The language used to render the invoice (if you use an invoice as your payment method).
     * @var LanguageType
     */
    public $Language;

    /**
     * The identifier of the last user to update the account's information.
     * @var long
     */
    public $LastModifiedByUserId;

    /**
     * The date and time that the account was last updated. The value is in Coordinated Universal Time (UTC).
     * @var dateTime
     */
    public $LastModifiedTime;

    /**
     * The name of the account. The name can contain a maximum of 100 characters and must be unique within the customer.
     * @var string
     */
    public $Name;

    /**
     * The system generated account number that is used to identify the account in the Bing Ads web application. The account number has the form xxxxxxxx, where xxxxxxxx is a series of any eight alphanumeric characters.
     * @var string
     */
    public $Number;

    /**
     * The identifier of the customer that owns the account.
     * @var long
     */
    public $ParentCustomerId;

    /**
     * The identifier of the payment instrument to use to settle the account.
     * @var long
     */
    public $PaymentMethodId;

    /**
     * The type of payment instrument to use to settle the account. You do not have to set this value because the type is determined by the payment instrument that you specify in the PaymentMethodId element.
     * @var PaymentMethodType
     */
    public $PaymentMethodType;

    /**
     * The identifier of the account manager who is primarily responsible for managing this account.
     * @var long
     */
    public $PrimaryUserId;

    /**
     * The status of the account. You cannot set the status of the account.
     * @var AccountLifeCycleStatus
     */
    public $AccountLifeCycleStatus;

    /**
     * The time-stamp value that the system uses internally to reconcile updates when you call the UpdateAccount or DeleteAccount operation.
     * @var base64Binary
     */
    public $TimeStamp;

    /**
     * The default time-zone value to use for campaigns in this account.
     */
    public $TimeZone;

    /**
     * A flag value that indicates who paused the account. The following are the possible values:
     * @var unsignedByte
     */
    public $PauseReason;
}
