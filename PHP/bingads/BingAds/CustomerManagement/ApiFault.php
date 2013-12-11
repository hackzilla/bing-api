<?php

namespace BingAds\CustomerManagement;

/**
 * Defines a fault object that operations return when web service-specific errors occur, such as when the request message contains incomplete or invalid data.
 * @link http://msdn.microsoft.com/en-us/library/dn169117(v=msads.80).aspx ApiFault Data Object
 */
final class ApiFault extends ApplicationFault
{
    /**
     * @var OperationError[]
     */
    public $OperationErrors;
}
