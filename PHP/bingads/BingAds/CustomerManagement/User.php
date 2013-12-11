<?php

namespace BingAds\CustomerManagement;

/**
 * Defines a user.
 * @link http://msdn.microsoft.com/en-us/library/bb671824(v=msads.90).aspx User Data Object
 */
final class User
{
    /**
     * The user's contact information.
     * @var ContactInfo
     */
    public $ContactInfo;

    /**
     * Confirms that the customer to whom this user belongs is an advertiser.
     * @var ApplicationType
     */
    public $CustomerAppScope;

    /**
     * The identifier of the customer to whom this user belongs.
     * @var long
     */
    public $CustomerId;

    /**
     * The system generated identifier of the user.
     * @var long
     */
    public $Id;

    /**
     * The user's job title. The title can contain a maximum of 50 characters.
     * @var string
     */
    public $JobTitle;

    /**
     * The identifier of the last user to update the user's information.
     * @var long
     */
    public $LastModifiedByUserId;

    /**
     * The date and time that that the user information was last updated. The value is in Coordinated Universal Time (UTC).
     * @var dateTime
     */
    public $LastModifiedTime;

    /**
     * The locale to use when sending correspondence to the user by email or postal mail. The default is EnglishUS.
     * @var LCID
     */
    public $Lcid;

    /**
     * The name of the user.
     * @var PersonName
     */
    public $Name;

    /**
     * The user's Bing Ads managed sign-in password.
     * @var string
     */
    public $Password;

    /**
     * The answer to the secret question that is specified in the SecretQuestion element. The answer must contain a minimum of five characters and a maximum of 64 characters.
     * @var string
     */
    public $SecretAnswer;

    /**
     * A question from a list of predefined questions that the user selects to use as his or her secret question. The SecretAnswer element contains the user's answer to the question. The secret question and answer are used to validate the user in case the user forgets his or her password, and requests it.
     * @var SecretQuestion
     */
    public $SecretQuestion;

    /**
     * The status of the user.
     * @var UserLifeCycleStatus
     */
    public $UserLifeCycleStatus;

    /**
     * A time-stamp value that the system uses internally to reconcile updates when you call the UpdateUser or DeleteUser operation.
     * @var base64Binary
     */
    public $TimeStamp;

    /**
     * The user's Bing Ads managed sign-in user name. The name is case-insensitive.
     * @var string
     */
    public $UserName;

    /**
     * If true, the user can be authenticated using a Microsoft Account. For more information, see Managing User Authentication with OAuth.
     * @var boolean
     */
    public $IsMigratedToMicrosoftAccount;
}
