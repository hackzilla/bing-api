<?php

namespace BingAds\Reporting;

/**
 * Defines the status of a report request.
 * @link http://msdn.microsoft.com/en-us/library/bb672100(v=msads.90).aspx ReportRequestStatus Data Object
 */
final class ReportRequestStatus
{
    /**
     * The URL from where the report can be downloaded. Use the URL only if the Status element contains Success.
     * @var string
     */
    public $ReportDownloadUrl;

    /**
     * The status of a report request.
     * @var ReportRequestStatusType
     */
    public $Status;
}
