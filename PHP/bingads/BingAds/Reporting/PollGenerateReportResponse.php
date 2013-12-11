<?php

namespace BingAds\Reporting;

/**
 * Response object for the PollGenerateReport service operation.
 * @link http://msdn.microsoft.com/en-us/library/jj879320(v=msads.80).aspx PollGenerateReportResponse Response Object
 */
final class PollGenerateReportResponse
{
    /**
     * The ReportRequestStatus object that contains the status of the report request and the download URL.
     * @var ReportRequestStatus
     */
    public $ReportRequestStatus;
}
