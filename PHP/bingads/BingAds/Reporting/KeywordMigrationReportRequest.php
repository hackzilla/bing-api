<?php

namespace BingAds\Reporting;

/**
 * Defines a report that shows you a list of your keyword objects that were included in the keyword migration process.
 * @link http://msdn.microsoft.com/en-us/library/hh969232(v=msads.80).aspx KeywordMigrationReportRequest Data Object
 */
final class KeywordMigrationReportRequest extends ReportRequest
{
    /**
     * The list of columns to include in the report. The report will include the columns in the order that you specify them.
     * @var KeywordMigrationReportColumn[]
     */
    public $Columns;

    /**
     * The scope of the report. Use this element to limit the report to include data for a combination of accounts and campaigns.
     * @var AccountThroughCampaignReportScope
     */
    public $Scope;
}
