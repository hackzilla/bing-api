<?php

namespace BingAds\Reporting;

/**
 * Defines the bid match type values that you can use to filter the report data. These values are also used as column values in reports that include bid match type, such as the keyword performance report.
 * @link http://msdn.microsoft.com/en-us/library/ff728812(v=msads.80).aspx BidMatchTypeReportFilter Value Set
 */
final class BidMatchTypeReportFilter
{
    /** The report will contain keywords that set a bid value for the exact match type (see the ExactMatchBid element of the Keyword data object). */
    const Exact = 'Exact';

    /** The report will contain keywords that set a bid value for the phrase match type (see the PhraseMatchBid element of the Keyword data object). */
    const Phrase = 'Phrase';

    /** The report will contain keywords that set a bid value for the broad match type (see the BroadMatchBid element of the Keyword data object). */
    const Broad = 'Broad';

    /** The report will contain keywords that set a bid value for the content match type (see the ContentMatchBid element of the Keyword data object). */
    const Content = 'Content';
}
