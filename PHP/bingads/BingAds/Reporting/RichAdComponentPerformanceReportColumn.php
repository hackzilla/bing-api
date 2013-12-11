<?php

namespace BingAds\Reporting;

/**
 * Defines the data columns that you can include in a rich ad component performance report.
 * @link http://msdn.microsoft.com/en-us/library/hh180149(v=msads.80).aspx RichAdComponentPerformanceReportColumn Value Set
 */
final class RichAdComponentPerformanceReportColumn
{
    /** The report will include a column that contains the account name. */
    const AccountName = 'AccountName';

    /** The report will include a column that contains the account number. */
    const AccountNumber = 'AccountNumber';

    /** The report will include a column that contains the time period of each report row. */
    const TimePeriod = 'TimePeriod';

    /** The report will include a column that contains the ad identifier. */
    const AdId = 'AdId';

    /** The report will include a column that contains the ad title. */
    const AdTitle = 'AdTitle';

    /** The report will include a column that contains the campaign name. */
    const CampaignName = 'CampaignName';

    /** The report will include a column that contains the ad group name. */
    const AdGroupName = 'AdGroupName';

    /** The report will include a column that contains the ad group identifier. */
    const AdGroupId = 'AdGroupId';

    /** The report will include a column that contains the rich ad type. The type determines the type of components that the ad contains. For possible values, see RichAdSubTypeFilter. */
    const RichAdSubType = 'RichAdSubType';

    /** The report will include a column that contains the component of the rich ad that was clicked. For possible values, see ComponentTypeFilter. */
    const ComponentType = 'ComponentType';

    /** The report will include a column that contains the title of the component. The ComponentType column identifies the component. */
    const ComponentTitle = 'ComponentTitle';

    /** The report will include a column that contains the destination URL as input. */
    const ComponentDestinationURL = 'ComponentDestinationURL';

    /** This column is no longer supported. Do not include it in your report. */
    const ComponentPosition = 'ComponentPosition';

    /** The report will include a column that contains the number of billable clicks of a rich ad. The count includes the first click of a component of the ad and subsequent clicks on the impression if the user waits a short, system-defined interval between clicks. If a subsequent click occurs within the interval, the click may be included in the ComponentNonBillableClicks column (see ComponentNonBillableClicks for more information). */
    const ComponentClicks = 'ComponentClicks';

    /** The report will include a column that contains the number of clicks that occur on different components of the ad after the first click but within the short, system-defined interval. Successive clicks on the same component within the system-defined interval are not counted. */
    const ComponentNonBillableClicks = 'ComponentNonBillableClicks';

    /** The report will include a column that contains the number of times that all components of the ad were clicked. This is the sum of the ComponentClicks and ComponentNonBillableClicks columns. */
    const ComponentTotalClicks = 'ComponentTotalClicks';

    /** The report will include a column that contains the click-through rate of all components of the ad that were clicked. */
    const ComponentCTR = 'ComponentCTR';
}
