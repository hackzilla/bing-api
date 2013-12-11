<?php

namespace BingAds\CustomerBilling;

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
