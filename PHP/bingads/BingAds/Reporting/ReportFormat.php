<?php

namespace BingAds\Reporting;

/**
 * Defines the file formats that you can use for a report.
 * @link http://msdn.microsoft.com/en-us/library/bb671932(v=msads.90).aspx ReportFormat Value Set
 */
final class ReportFormat
{
    /** The report format will be comma-separated values (.csv). */
    const Csv = 'Csv';

    /** The report format will be tab-separated values (.tsv). */
    const Tsv = 'Tsv';

    /** The report format will be XML (.xml). */
    const Xml = 'Xml';
}
