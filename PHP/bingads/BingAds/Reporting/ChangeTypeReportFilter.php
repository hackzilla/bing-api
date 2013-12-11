<?php

namespace BingAds\Reporting;

/**
 * Defines the types of changes to entities by which you can filter the report data. These values are also used as column values in the HowChanged column of the campaign change history report.
 * @link http://msdn.microsoft.com/en-us/library/hh912354(v=msads.80).aspx ChangeTypeReportFilter Value Set
 */
final class ChangeTypeReportFilter
{
    /** The report will include data for entities that have been added. */
    const Added = 'Added';

    /** The report will include data for entities that have been deleted. */
    const Deleted = 'Deleted';

    /** The report will include data for elements of entities whose values have been updated. */
    const Changed = 'Changed';
}
