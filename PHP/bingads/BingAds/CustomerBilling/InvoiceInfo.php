<?php

namespace BingAds\CustomerBilling;

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
