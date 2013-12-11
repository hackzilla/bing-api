<?php

namespace BingAds\Reporting;

/**
 * Defines the aggregation values that you can use in a search query performance report.
 * @link http://msdn.microsoft.com/en-us/library/ee703960(v=msads.80).aspx SearchQueryReportAggregation Value Set
 */
final class SearchQueryReportAggregation
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
}
