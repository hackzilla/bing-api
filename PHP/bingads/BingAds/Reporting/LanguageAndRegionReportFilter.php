<?php

namespace BingAds\Reporting;

/**
 * Defines the Bing Ads website values that you can use to filter the report data.
 * @link http://msdn.microsoft.com/en-us/library/bb671573(v=msads.80).aspx LanguageAndRegionReportFilter Value Set
 */
final class LanguageAndRegionReportFilter
{
    /** The report will include ads that were displayed on the Bing Ads English-language website in Canada. */
    const EnglishCanada = 'EnglishCanada';

    /** The report will include ads that were displayed on the Bing Ads French-language website in Canada. */
    const FrenchCanada = 'FrenchCanada';

    /** The report will include ads that were displayed on the Bing Ads website in France. */
    const France = 'France';

    /** The report will include ads that were displayed on the Bing Ads website in Singapore. */
    const Singapore = 'Singapore';

    /** The report will include ads that were displayed on the Bing Ads website in the United Kingdom. */
    const UnitedKingdom = 'UnitedKingdom';

    /** The report will include ads that were displayed on the Bing Ads website in the United States. */
    const UnitedStates = 'UnitedStates';
}
