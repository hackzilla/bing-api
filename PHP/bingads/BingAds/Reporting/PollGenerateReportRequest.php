<?php

namespace BingAds\Reporting;

/**
 * Gets the status of a report request.
 * @link http://msdn.microsoft.com/en-us/library/jj879320(v=msads.80).aspx PollGenerateReportRequest Request Object
 */
final class PollGenerateReportRequest
{
    /**
     * The identifier of the report request. The SubmitGenerateReport operation returns the identifier.
     * @var string
     */
    public $ReportRequestId;
}
