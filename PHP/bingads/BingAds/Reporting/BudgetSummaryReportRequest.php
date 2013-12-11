<?php

namespace BingAds\Reporting;

/**
 * Defines a budget summary report request, which shows how your campaign's budget is performing for the month. For example, the report shows your monthly budget, how much you have spent to date, and whether you are on target to spend your monthly budget.
 * @link http://msdn.microsoft.com/en-us/library/bb672028(v=msads.90).aspx BudgetSummaryReportRequest Data Object
 */
final class BudgetSummaryReportRequest extends ReportRequest
{
    /**
     * The list of columns to include in the report. The report will include the columns in the order that you specify them.
     * @var BudgetSummaryReportColumn[]
     */
    public $Columns;

    /**
     * The scope of the report. Use this element to limit the report to include data for a combination of accounts and campaigns.
     * @var AccountThroughCampaignReportScope
     */
    public $Scope;

    /**
     * The time period to use for the report. You can specify a custom date range or select a predefined date range (for example, Today, ThisWeek, or LastMonth).
     * @var BudgetSummaryReportTime
     */
    public $Time;
}
