<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the base object from which all exclusions derive.
 * @link http://msdn.microsoft.com/en-us/library/jj604420(v=msads.80).aspx Exclusion Data Object
 */
class Exclusion
{
    /**
     * The exclusion's ID.
     * @var long
     */
    public $Id;

    /**
     * The exclusion's type. The following are the possible values.
     * @var string
     */
    public $Type;
}
