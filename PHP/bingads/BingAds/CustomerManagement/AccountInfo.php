<?php

namespace BingAds\CustomerManagement;

/**
 * Defines an account identification object that contains information that identifies an account.
 * @link http://msdn.microsoft.com/en-us/library/ff728414(v=msads.90).aspx AccountInfo Data Object
 */
final class AccountInfo
{
    /**
     * The system generated identifier of the account.
     * @var long
     */
    public $Id;

    /**
     * The name of the account.
     * @var string
     */
    public $Name;

    /**
     * The account number.
     * @var string
     */
    public $Number;

    /**
     * The status of the account.
     * @var AccountLifeCycleStatus
     */
    public $AccountLifeCycleStatus;

    /**
     * A flag value that indicates who paused the account. The following are the possible values:
     * @var unsignedByte
     */
    public $PauseReason;
}
