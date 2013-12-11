<?php

namespace BingAds\CampaignManagement;

/**
 * Normalizes a list of keyword or negative keyword strings.
 * @link http://msdn.microsoft.com/en-us/library/ff728531(v=MSADS.80).aspx GetNormalizedStringsRequest Request Object
 */
final class GetNormalizedStringsRequest
{
    /**
     * An array of keyword or negative keyword strings that you want to normalize. The array can have a maximum of 1,000 strings, and each string can have a maximum of 100 characters.
     * @var string[]
     */
    public $Strings;

    /**
     * The language to use to normalize the strings. The language determines the rules that the service uses to normalize the strings. The language that you specify and the language of the strings to be normalized must be the same. For possible values, see Language Values.
     * @var string
     */
    public $Language;

    /**
     * A Boolean value that determines whether to remove noise words from the keyword. To remove noise words, set to true. The default is true.
     * @var boolean
     */
    public $RemoveNoise;
}
