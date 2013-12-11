<?php

namespace BingAds\Reporting;

/**
 * Defines the delivered match type values that you can use to filter the report data. These values are also used as column values in reports that include match type, such as the keyword performance report.
 * @link http://msdn.microsoft.com/en-us/library/bb671749(v=msads.80).aspx DeliveredMatchTypeReportFilter Value Set
 */
final class DeliveredMatchTypeReportFilter
{
    /** The report will contain ads that were delivered by using an exact match comparison. */
    const Exact = 'Exact';

    /** The report will contain ads that were delivered by using a phrase match comparison. */
    const Phrase = 'Phrase';

    /** The report will contain ads that were delivered using a broad match comparison. */
    const Broad = 'Broad';

    /** The report will contain ads that were delivered by using a content match comparison. */
    const Content = 'Content';
}
