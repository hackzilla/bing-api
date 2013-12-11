<?php

namespace BingAds\AdIntelligence;

/**
 * Defines an object that contains a keyword category and a confidence score. The confidence score indicates the likelihood that the keyword belongs to the keyword category.
 * @link http://msdn.microsoft.com/en-us/library/hh921730(v=msads.90).aspx KeywordCategory Data Object
 */
final class KeywordCategory
{
    /**
     * The keyword category that the keyword might belong to.
     * @var string
     */
    public $Category;

    /**
     * A score from 0.0 to 1.0 that indicates the likelihood that the keyword belongs to the category.
     * @var double
     */
    public $ConfidenceScore;
}
