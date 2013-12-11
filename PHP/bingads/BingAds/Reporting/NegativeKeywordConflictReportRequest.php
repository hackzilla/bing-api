<?php

namespace BingAds\Reporting;

/**
 * Defines a negative-keyword conflict report that identifies conflicts between your negative keywords and keywords.
 * @link http://msdn.microsoft.com/en-us/library/hh560534(v=msads.90).aspx NegativeKeywordConflictReportRequest Data Object
 */
final class NegativeKeywordConflictReportRequest extends ReportRequest
{
    /**
     * The list of columns to include in the report. The report will include the columns in the order that you specify them.
     * @var NegativeKeywordConflictReportColumn[]
     */
    public $Columns;

    /**
     * The scope of the report. Use this element to limit the report to include data for a combination of accounts, ad groups, and campaigns.
     * @var AccountThroughAdGroupReportScope
     */
    public $Scope;
}
