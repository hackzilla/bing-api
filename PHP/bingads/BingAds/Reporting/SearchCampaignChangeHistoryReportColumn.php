<?php

namespace BingAds\Reporting;

/**
 *  Defines the data columns that you can include in a campaign change history report.
 * @link http://msdn.microsoft.com/en-us/library/hh912353(v=msads.80).aspx SearchCampaignChangeHistoryReportColumn Value Set
 */
final class SearchCampaignChangeHistoryReportColumn
{
    /** The report will include a column that contains the date and time of the change. The date and time will be in the time zone of the campaign. */
    const DateTime = 'DateTime';

    /** The report will include a column that contains the username of the user that made the change. If the system made the change, the value will be Administrator. */
    const ChangedBy = 'ChangedBy';

    /** The report will include a column that contains the name of the campaign that changed, or the name of the campaign that contains the ad group or ad that changed. */
    const CampaignName = 'CampaignName';

    /** The report will include a column that contains the name of the ad group that changed or the name of the ad group that contains the ad or keyword that changed. */
    const AdGroupName = 'AdGroupName';

    /** The report will include a column that contains the title of the ad that changed. This column will be empty if ItemChanged is not Ad. */
    const AdTitle = 'AdTitle';

    /** The report will include a column that contains the description of the ad that changed. This column will be empty if ItemChanged is not Ad. */
    const AdDescription = 'AdDescription';

    /** The report will include a column that contains the display URL of the ad that changed. This column will be empty if ItemChanged is not Ad. */
    const DisplayUrl = 'DisplayUrl';

    /** The report will include a column that contains the keyword that changed. This column will be empty if ItemChanged is not Keyword. */
    const Keyword = 'Keyword';

    /** The report will include a column that contains a value that identifies the entity that changed. For possible entity values, see ChangeEntityReportFilter. If the change is an update to an element of the entity or is related to a target associated with a campaign or ad group, the AttributeChanged column contains the element of the entity that changed or the type of target that was changed. */
    const ItemChanged = 'ItemChanged';

    /** The report will include a column that contains a value that identifies the element of the entity (identified in the ItemChanged column) that changed. */
    const AttributeChanged = 'AttributeChanged';

    /** The report will include a column that contains a value that indicates whether the element was added, updated, or deleted. For possible values, see ChangeTypeReportFilter. */
    const HowChanged = 'HowChanged';

    /** The report will include a column that contains the value before the change. For more information, see the HowChanged column. */
    const OldValue = 'OldValue';

    /** The report will include a column that contains the value after the change. For more information, see the HowChanged column. */
    const NewValue = 'NewValue';
}
