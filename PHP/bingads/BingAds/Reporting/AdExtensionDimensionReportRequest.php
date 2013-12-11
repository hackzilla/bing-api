<?php

namespace BingAds\Reporting;

/**
 * Defines an ad extension report request that lists all versions of an ad extension by account. You may use this information along with the performance data from the AdExtensionByAdReportRequest and AdExtensionByKeywordReportRequest reports to determine which version performed better.
 * @link http://msdn.microsoft.com/en-us/library/jj713607(v=msads.90).aspx AdExtensionDimensionReportRequest Data Object
 */
final class AdExtensionDimensionReportRequest extends ReportRequest
{
    /**
     * The list of columns to include in the report. The report will include the columns in the order that you specify them.
     * @var AdExtensionDimensionReportColumn[]
     */
    public $Columns;

    /**
     * The criteria to use to filter the report data.
     * @var AdExtensionDimensionReportFilter
     */
    public $Filter;

    /**
     * The scope of the report. Use this element to limit the report to include data for one or more accounts.
     * @var AccountReportScope
     */
    public $Scope;
}
