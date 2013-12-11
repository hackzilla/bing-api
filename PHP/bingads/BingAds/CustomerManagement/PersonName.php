<?php

namespace BingAds\CustomerManagement;

/**
 * Defines the name of a user.
 * @link http://msdn.microsoft.com/en-us/library/ff728429(v=msads.90).aspx PersonName Data Object
 */
final class PersonName
{
    /**
     * The first name of the user. The first name is limited to 100 characters.
     * @var string
     */
    public $FirstName;

    /**
     * The last name of the user. The last name is limited to 100 characters.
     * @var string
     */
    public $LastName;

    /**
     * The middle initial of the user. The middle initial is limited to one character.
     * @var string
     */
    public $MiddleInitial;
}
