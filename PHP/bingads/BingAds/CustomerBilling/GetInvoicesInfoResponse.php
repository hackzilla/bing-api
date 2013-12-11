<?php

namespace BingAds\CustomerBilling;

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
