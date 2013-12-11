<?php

namespace BingAds\CustomerManagement;

/**
 * Defines a user identification object that contains information that identifies a user.
 * @link http://msdn.microsoft.com/en-us/library/ff728438(v=msads.80).aspx UserInfo Data Object
 */
final class UserInfo
{
    /**
     * The system generated identifier of the user.
     * @var long
     */
    public $Id;

    /**
     * The logon user name of the user.
     * @var string
     */
    public $UserName;
}
