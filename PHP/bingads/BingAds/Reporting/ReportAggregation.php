<?php

namespace BingAds\Reporting;

/**
 * Defines the aggregation values that you can use for a report.
 * @link http://msdn.microsoft.com/en-us/library/bb672067(v=msads.90).aspx ReportAggregation Value Set
 */
final class ReportAggregation
{
    /** The report data will be aggregated for the entire specified report time. */
    const Summary = 'Summary';

    /** The report data will be aggregated for each hour. */
    const Hourly = 'Hourly';

    /** The report data will be aggregated for each day. */
    const Daily = 'Daily';

    /** The report data will be aggregated for each week. */
    const Weekly = 'Weekly';

    /** The report data will be aggregated for each month. */
    const Monthly = 'Monthly';

    /** The report data will be aggregated for each year. */
    const Yearly = 'Yearly';

    const HourOfDay = 'HourOfDay';

    const DayOfWeek = 'DayOfWeek';
}
