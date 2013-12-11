<?php

namespace BingAds\Reporting;

/**
 * Defines the gender values that you can use to filter the report data. These values are also used as column values in reports that include gender information, such as the segmentation performance report.
 * @link http://msdn.microsoft.com/en-us/library/gg262856(v=msads.80).aspx GenderReportFilter Value Set
 */
final class GenderReportFilter
{
    /** The report will include data where the gender of the user that generated the traffic is unknown. */
    const Unknown = 'Unknown';

    /** The report will include data where male users generated the traffic. */
    const Male = 'Male';

    /** The report will include data where female users generated the traffic. */
    const Female = 'Female';
}
