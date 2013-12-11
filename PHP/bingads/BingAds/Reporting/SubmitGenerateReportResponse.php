<?php

namespace BingAds\Reporting;

/**
 * Response object for the SubmitGenerateReport service operation.
 * @link http://msdn.microsoft.com/en-us/library/jj879321(v=msads.80).aspx SubmitGenerateReportResponse Response Object
 */
final class SubmitGenerateReportResponse
{
    /**
     * The identifier of the report request. Use this identifier when calling the PollGenerateReport operation to determine the status of the report request. Once returned, the identifier is valid for five days.
     * @var string
     */
    public $ReportRequestId;
}
