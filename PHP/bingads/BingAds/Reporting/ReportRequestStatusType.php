<?php

namespace BingAds\Reporting;

/**
 * Defines the status of a report.
 * @link http://msdn.microsoft.com/en-us/library/bb671578(v=msads.90).aspx ReportRequestStatusType Value Set
 */
final class ReportRequestStatusType
{
    /** An error occurred while generating the report. You will need to submit your report request again. If the request continues to fail, consider getting the tracking identifier from the response message and contacting support. */
    const Error = 'Error';

    /** The report was successfully completed. */
    const Success = 'Success';

    /** The report is not yet complete. */
    const Pending = 'Pending';
}
