<?php

namespace BingAds\Reporting;

/**
 * Submits a report request.
 * @link http://msdn.microsoft.com/en-us/library/jj879321(v=msads.80).aspx SubmitGenerateReportRequest Request Object
 */
final class SubmitGenerateReportRequest
{
    /**
     * The report request. The request must be an object that derives from ReportRequest. For a list of report request types, see Report Types.
     * @var ReportRequest
     */
    public $ReportRequest;
}
