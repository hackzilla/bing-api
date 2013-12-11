<?php

namespace BingAds\Reporting;

/**
 * Defines the country/region values that you can use to filter the report data. These values are also used as column values in reports that include country/region, such as the metro area demographic performance report.
 * @link http://msdn.microsoft.com/en-us/library/bb672092(v=msads.80).aspx CountryReportFilter Value Set
 */
final class CountryReportFilter
{
    /** The report will include data for accounts that operate in Canada. */
    const Canada = 'Canada';

    /** The report will include data for accounts that operate in France. */
    const France = 'France';

    /** The report will include data for accounts that operate in Singapore. */
    const Singapore = 'Singapore';

    /** The report will include data for accounts that operate in the United Kingdom. */
    const UnitedKingdom = 'UnitedKingdom';

    /** The report will include data for accounts that operate in the United States. */
    const UnitedStates = 'UnitedStates';
}
