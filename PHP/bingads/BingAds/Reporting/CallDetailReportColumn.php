<?php

namespace BingAds\Reporting;

/**
 * Defines the data columns that you can include in a call detail report.
 * @link http://msdn.microsoft.com/en-us/library/dn195843(v=msads.80).aspx CallDetailReportColumn Value Set
 */
final class CallDetailReportColumn
{
    /** The report will include a column that contains the account name. */
    const AccountName = 'AccountName';

    /** The report will include a column that contains the campaign name. */
    const CampaignName = 'CampaignName';

    /** The report will include a column that contains the ad group name. */
    const AdGroupName = 'AdGroupName';

    /**  */
    const TimePeriod = 'TimePeriod';

    /** The report will include a column that contains the start time of the call. */
    const StartTime = 'StartTime';

    /** The report will include a column that contains the end time of the call. */
    const EndTime = 'EndTime';

    /** The report will include a column that contains the call duration. */
    const Duration = 'Duration';

    /** The report will include a column that contains the call status. */
    const CallStatus = 'CallStatus';

    /** The report will include a column that contains the spend per phone call. */
    const PhoneSpend = 'PhoneSpend';

    /** The report will include a column that contains the call type name. */
    const CallTypeName = 'CallTypeName';

    /** The report will include a column that contains the account identifier. */
    const AccountId = 'AccountId';

    /** The report will include a column that contains the campaign identifier. */
    const CampaignId = 'CampaignId';

    /** The report will include a column that contains the ad group identifier. */
    const AdGroupId = 'AdGroupId';
}
