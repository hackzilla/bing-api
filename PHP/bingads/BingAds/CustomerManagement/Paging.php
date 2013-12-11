<?php

namespace BingAds\CustomerManagement;

/**
 * Defines a paging object.
 * @link http://msdn.microsoft.com/en-us/library/dn452059(v=msads.90).aspx Paging Data Object
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
