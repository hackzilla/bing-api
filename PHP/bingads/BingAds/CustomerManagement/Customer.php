<?php

namespace BingAds\CustomerManagement;

/**
 * Defines a customer.
 * @link http://msdn.microsoft.com/en-us/library/bb671875(v=msads.90).aspx Customer Data Object
 */
final class Customer
{
    /**
     * The customer's business address.
     * @var Address
     */
    public $CustomerAddress;

    /**
     * The financial status of the customer. For example, the status indicates whether the customer is in good standing or one or more of the accounts are past due.
     * @var CustomerFinancialStatus
     */
    public $CustomerFinancialStatus;

    /**
     * The system generated customer identifier.
     * @var long
     */
    public $Id;

    /**
     * The primary business segment of the customer (for example, automotive, food, or entertainment).
     * @var Industry
     */
    public $Industry;

    /**
     * The identifier of the last user to update the customer's information.
     * @var long
     */
    public $LastModifiedByUserId;

    /**
     * The date and time that the customer information was last updated. The value is in Coordinated Universal Time (UTC).
     * @var dateTime
     */
    public $LastModifiedTime;

    /**
     * The primary country where the customer operates. For possible values, see Geographical Location Codes.
     * @var string
     */
    public $MarketCountry;

    /**
     * The list of key and value strings for forward compatibility. This element can be used to avoid otherwise breaking changes when new elements are added in future releases.
     */
    public $ForwardCompatibilityMap;

    /**
     * The primary language that the customer uses.
     * @var LanguageType
     */
    public $MarketLanguage;

    /**
     * The name of the customer. The name can contain a maximum of 100 characters.
     * @var string
     */
    public $Name;

    /**
     * For internal use only.
     * @var ServiceLevel
     */
    public $ServiceLevel;

    /**
     * The status of the customer. When you create the customer, the status is set to Active. You cannot change the status.
     * @var CustomerLifeCycleStatus
     */
    public $CustomerLifeCycleStatus;

    /**
     * A time-stamp value that the system uses internally to reconcile updates when you call the UpdateCustomer or DeleteCustomer operation.
     * @var base64Binary
     */
    public $TimeStamp;

    /**
     * A system-generated customer number that is used in the Bing Ads web application. The customer number is of the form, C nnnnnnn, where nnnnnnn is a series of digits.
     * @var string
     */
    public $Number;
}
