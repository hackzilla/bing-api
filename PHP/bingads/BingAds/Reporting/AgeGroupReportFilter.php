<?php

namespace BingAds\Reporting;

/**
 * Defines the age range values that you can use to filter the report data. These values are also used as column values in reports that include age group information, such as the segmentation report.
 * @link http://msdn.microsoft.com/en-us/library/gg262848(v=msads.80).aspx AgeGroupReportFilter Value Set
 */
final class AgeGroupReportFilter
{
    /** The report will include users whose age is unknown. */
    const Unknown = 'Unknown';

    /** The report will include users up to 12 years old. */
    const Ages0to12 = 'Ages0to12';

    /** The report will include users in the age range of 13 to 17. */
    const Ages13to17 = 'Ages13to17';

    /** The report will include users in the age range of 18 to 24. */
    const Ages18to24 = 'Ages18to24';

    /** The report will include users in the age range of 25 to 34. */
    const Ages25to34 = 'Ages25to34';

    /** The report will include users in the age range of 35 to 49. */
    const Ages35to49 = 'Ages35to49';

    /** The report will include users in the age range of 50 to 64. */
    const Ages50to64 = 'Ages50to64';

    /** The report will include users in the age range of 65 and older. */
    const Ages65plus = 'Ages65plus';
}
