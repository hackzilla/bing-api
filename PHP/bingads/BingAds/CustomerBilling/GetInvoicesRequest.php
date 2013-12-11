<?php

namespace BingAds\CustomerBilling;

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
