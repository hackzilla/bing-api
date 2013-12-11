<?php

namespace BingAds\Reporting;

/**
 * Defines the ad distribution medium values that you can use to filter the report data. These values are also used as column values in reports that include ad distribution, such as the account performance report.
 * @link http://msdn.microsoft.com/en-us/library/bb671722(v=msads.80).aspx AdDistributionReportFilter Value Set
 */
final class AdDistributionReportFilter
{
    /** The report will contain search ads. */
    const Search = 'Search';

    /** The report will contain content ads. */
    const Content = 'Content';
}
