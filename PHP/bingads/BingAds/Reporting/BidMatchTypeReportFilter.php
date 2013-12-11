<?php

namespace BingAds\Reporting;

/**
 * Defines the bid match type values that you can use to filter the report data. These values are also used as column values in reports that include bid match type, such as the keyword performance report.For more information, see the MatchType element of the Keyword data object.
 * @link http://msdn.microsoft.com/en-us/library/ff728812(v=msads.90).aspx BidMatchTypeReportFilter Value Set
 */
final class BidMatchTypeReportFilter
{
    /** The report will contain keywords that set a bid value for the exact match type. */
    const Exact = 'Exact';

    /** The report will contain keywords that set a bid value for the phrase match type. */
    const Phrase = 'Phrase';

    /** The report will contain keywords that set a bid value for the broad match type. */
    const Broad = 'Broad';

    /** The report will contain keywords that set a bid value for the content match type. */
    const Content = 'Content';
}
