<?php

namespace BingAds\CustomerBilling;

/**
 * Defines a billing invoice.
 * @link http://msdn.microsoft.com/en-us/library/bb672036(v=msads.80).aspx Invoice Data Object
 */
final class Invoice
{
    /**
     * The invoice.
     * @var base64Binary
     */
    public $Data;

    /**
     * The identifier of the invoice.
     * @var long
     */
    public $Id;

    /**
     * The format of the invoice.
     * @var DataType
     */
    public $Type;
}
