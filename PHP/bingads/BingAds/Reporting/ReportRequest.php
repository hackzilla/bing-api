<?php

namespace BingAds\Reporting;

/**
 * Defines the base object for all report requests.
 * @link http://msdn.microsoft.com/en-us/library/bb671813(v=msads.80).aspx ReportRequest Data Object
 */
class ReportRequest
{
    /**
     * The format of the report data. For example, you can request the data in comma-separated values (CSV) format or XML format. The default is CSV format.
     * @var ReportFormat
     */
    public $Format;

    /**
     * The language to use to generate the report headers and columns. The default is English.
     * @var ReportLanguage
     */
    public $Language;

    /**
     * The name of the report. The name is included in the report header. If you do not specify a report name, the system generates a name in the form, ReportType-ReportDateTime.
     * @var string
     */
    public $ReportName;

    /**
     * Determines whether you want the service to generate the report only if all the data is available (has been processed).
     * @var boolean
     */
    public $ReturnOnlyCompleteData;
}
