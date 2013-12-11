<?php

namespace BingAds\CustomerBilling;

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
