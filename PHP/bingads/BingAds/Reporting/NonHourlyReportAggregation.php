<?php

namespace BingAds\Reporting;

/**
 * Defines the aggregation values for reports that cannot specify hourly aggregation.
 * @link http://msdn.microsoft.com/en-us/library/bb672057(v=msads.80).aspx NonHourlyReportAggregation Value Set
 */
final class NonHourlyReportAggregation
{
    /** The report data will be aggregated for the entire specified report time. */
    const Summary = 'Summary';

    /** The report data will be aggregated for each day. */
    const Daily = 'Daily';

    /** The report data is aggregated for each week. */
    const Weekly = 'Weekly';

    /** The report data will be aggregated for each month. */
    const Monthly = 'Monthly';

    /** The report data is aggregated for each year. */
    const Yearly = 'Yearly';
}
