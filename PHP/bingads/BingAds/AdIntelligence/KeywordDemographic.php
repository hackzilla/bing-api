<?php

namespace BingAds\AdIntelligence;

/**
 * Defines an object that contains the age and gender of the user who entered the search query, if known.
 * @link http://msdn.microsoft.com/en-us/library/hh921729(v=msads.80).aspx KeywordDemographic Data Object
 */
final class KeywordDemographic
{
    /**
     * The percentage of time that users 18 through 24 years of age searched for the keyword. The value is specified in the range 0.0 through 1.0.
     * @var double
     */
    public $Age18_24;

    /**
     * The percentage of time that users 25 through 34 years of age searched for the keyword. The value is specified in the range 0.0 through 1.0.
     * @var double
     */
    public $Age25_34;

    /**
     * The percentage of time that users 35 through 49 years of age searched for the keyword. The value is specified in the range 0.0 through 1.0.
     * @var double
     */
    public $Age35_49;

    /**
     * The percentage of time that users 50 through 64 years of age searched for the keyword. The value is specified in the range 0.0 through 1.0.
     * @var double
     */
    public $Age50_64;

    /**
     * The percentage of time that users 65 years of age or older searched for the keyword. The value is specified in the range 0.0 through 1.0.
     * @var double
     */
    public $Age65Plus;

    /**
     * Not used.
     * @var double
     */
    public $AgeUnknown;

    /**
     * The percentage of time that female users searched for the keyword. The value is specified in the range 0.0 through 1.0.
     * @var double
     */
    public $Female;

    /**
     * The percentage of time that male users searched for the keyword. The value is specified in the range 0.0 through 1.0.
     * @var double
     */
    public $Male;

    /**
     * Not Used.
     * @var double
     */
    public $GenderUnknown;
}
