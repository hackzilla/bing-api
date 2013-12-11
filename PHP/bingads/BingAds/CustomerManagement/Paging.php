<?php

namespace BingAds\CustomerManagement;

/**
 * Defines a paging object.
 * @link http://msdn.microsoft.com/en-us/library/dn313267(v=msads.80).aspx Paging Data Object
 */
final class Paging
{
    /**
     * The results page index.
     * @var int
     */
    public $Index;

    /**
     * The page size and the number of results to return in the specified page.
     * @var int
     */
    public $Size;
}
