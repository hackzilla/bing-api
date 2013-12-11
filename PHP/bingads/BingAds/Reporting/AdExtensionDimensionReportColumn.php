<?php

namespace BingAds\Reporting;

/**
 * Defines the data columns that you can include in an ad extension dimension report.
 * @link http://msdn.microsoft.com/en-us/library/jj713609(v=msads.80).aspx AdExtensionDimensionReportColumn Value Set
 */
final class AdExtensionDimensionReportColumn
{
    /** The report will include a column that contains the account identifier. */
    const AccountId = 'AccountId';

    /** The report will include a column that contains the type of the ad extension. */
    const AdExtensionType = 'AdExtensionType';

    /** The report will include a column that contains the ad extension identifier. */
    const AdExtensionId = 'AdExtensionId';

    /** The report will include a column that contains the version of the ad extension. */
    const AdExtensionVersion = 'AdExtensionVersion';

    /** The report will include a column that contains the status of the ad extension. */
    const Status = 'Status';

    /** The report will include a column that identifies the ad extension property. The AdExtensionPropertyValue column contains the value of the property. The following are the possible property ID values. */
    const AdExtensionPropertyId = 'AdExtensionPropertyId';

    /** The report will include a column that contains the property value of the property identified by the AdExtensionPropertyId column. */
    const AdExtensionPropertyValue = 'AdExtensionPropertyValue';
}
