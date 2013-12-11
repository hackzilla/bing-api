<?php

namespace BingAds\CustomerBilling;

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
