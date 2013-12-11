<?php

namespace BingAds\CustomerManagement;

/**
 * Reserved for internal use.
 * @link http://msdn.microsoft.com/en-us/library/dn270519(v=MSADS.80).aspx SearchCustomersRequest Request Object
 */
final class SearchCustomersRequest
{
    /**
     * @var ApplicationType
     */
    public $ApplicationScope;

    /**
     * @var Predicate[]
     */
    public $Predicates;

    /**
     * @var DateRange
     */
    public $DateRange;

    /**
     * @var OrderBy[]
     */
    public $Ordering;

    /**
     * @var Paging
     */
    public $PageInfo;
}
