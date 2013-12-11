<?php

namespace BingAds\Reporting;

/**
 * Defines the set of accounts to include in the report.
 * @link http://msdn.microsoft.com/en-us/library/bb671563(v=msads.80).aspx AccountReportScope Data Object
 */
final class AccountReportScope
{
    /**
     * An array of a maximum of 1,000 account identifiers that identifies the account data to include in the report.
     * @var long[]
     */
    public $AccountIds;
}
