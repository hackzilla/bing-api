<?php

namespace BingAds\CustomerBilling;

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
