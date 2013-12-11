<?php

namespace BingAds\Reporting;

/**
 * Defines the data columns that you can include in a budget summary report.
 * @link http://msdn.microsoft.com/en-us/library/bb671925(v=msads.90).aspx BudgetSummaryReportColumn Value Set
 */
final class BudgetSummaryReportColumn
{
    /** The report will include a column that contains the account name. */
    const AccountName = 'AccountName';

    /** The report will include a column that contains the account number. */
    const AccountNumber = 'AccountNumber';

    /** The report will include a column that contains the campaign name. */
    const CampaignName = 'CampaignName';

    /** The report will include a column that contains the date that this report applies to. */
    const Date = 'Date';

    /** The report will include a column that contains the currency used by the account that owns the campaign. For possible values, see Currencies. */
    const CurrencyCode = 'CurrencyCode';

    /** The report will include a column that contains the budgeted amount of money to spend per month. */
    const MonthlyBudget = 'MonthlyBudget';

    /** The report will include a column that contains the budgeted amount of money to spend per day. */
    const DailySpend = 'DailySpend';

    /** The report will include a column that contains the amount of money spent to date for the month. */
    const MonthToDateSpend = 'MonthToDateSpend';
}
