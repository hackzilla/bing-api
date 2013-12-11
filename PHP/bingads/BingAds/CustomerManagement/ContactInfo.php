<?php

namespace BingAds\CustomerManagement;

/**
 * Defines the contact information for a user.
 * @link http://msdn.microsoft.com/en-us/library/bb671639(v=msads.80).aspx ContactInfo Data Object
 */
final class ContactInfo
{
    /**
     * The address of the user.
     * @var Address
     */
    public $Address;

    /**
     * A value that determines whether the user should be contacted by telephone. If true, the telephone number specified in the Phone1 element is used to contact the user.
     * @var boolean
     */
    public $ContactByPhone;

    /**
     * A value that determines whether the user should be contacted by postal mail. If true, correspondence is sent to the address specified in the Address element.
     * @var boolean
     */
    public $ContactByPostalMail;

    /**
     * The email address of the user. The address can contain a maximum of 100 characters.
     * @var string
     */
    public $Email;

    /**
     * The format of the body of an email message to use when correspondence is sent to the user (this does not apply to the activation notification email message).
     * @var EmailFormat
     */
    public $EmailFormat;

    /**
     * The fax telephone number of the user. The telephone number can contain a maximum of 100 characters.
     * @var string
     */
    public $Fax;

    /**
     * The home telephone number of the user. The telephone number can contain a maximum of 100 characters.
     * @var string
     */
    public $HomePhone;

    /**
     * The system generated identifier of the object.
     * @var long
     */
    public $Id;

    /**
     * The mobile telephone number of the user. The telephone number can contain a maximum of 100 characters.
     * @var string
     */
    public $Mobile;

    /**
     * The primary telephone number of the user. The telephone number can contain a maximum of 100 characters.
     * @var string
     */
    public $Phone1;

    /**
     * An alternate telephone number for the user. The telephone number can contain a maximum of 100 characters.
     * @var string
     */
    public $Phone2;
}
