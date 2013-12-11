<?php

namespace BingAds\Optimizer;

/**
 * This is the base class from which opportunity objects derive. The class contains the key used to identify the opportunity and the date by when the opportunity expires.
 * @link http://msdn.microsoft.com/en-us/library/hh418063(v=msads.80).aspx Opportunity Data Object
 */
class Opportunity
{
    /**
     * The date by when the budget recommendation expires. The dateTime object contains only the date portion.
     * @var dateTime
     */
    public $ExpirationDate;

    /**
     * An identifier that uniquely identifies the budget opportunity. You use this identifier when calling the ApplyOpportunites operation.
     * @var string
     */
    public $OpportunityKey;
}
