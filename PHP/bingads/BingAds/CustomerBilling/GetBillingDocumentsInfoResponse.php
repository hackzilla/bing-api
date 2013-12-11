<?php

namespace BingAds\CustomerBilling;

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
