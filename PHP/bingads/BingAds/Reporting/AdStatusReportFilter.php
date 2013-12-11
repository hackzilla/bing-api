<?php

namespace BingAds\Reporting;

/**
 * Defines the ad status values that you can use to filter the report data. These values are also used as column values in reports that include ad status, such as the search query performance report.
 * @link http://msdn.microsoft.com/en-us/library/hh560533(v=msads.90).aspx AdStatusReportFilter Value Set
 */
final class AdStatusReportFilter
{
    /** The same meaning as Active. This value is maintained for backward compatibility; however, you should use Active instead. */
    const Submitted = 'Submitted';

    /** The report will contain ads that have been rejected by editorial review. */
    const Rejected = 'Rejected';

    /** The report will contain ads that have been deleted. */
    const Deleted = 'Deleted';

    /** The report will contain ads that are pending editorial review. */
    const Pending = 'Pending';

    /** The report will contain ads that are active. */
    const Active = 'Active';
}
