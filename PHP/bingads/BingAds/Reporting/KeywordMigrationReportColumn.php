<?php

namespace BingAds\Reporting;

/**
 * Defines the data columns that you can include in a keyword migration report.
 * @link http://msdn.microsoft.com/en-us/library/hh969233(v=msads.80).aspx KeywordMigrationReportColumn Value Set
 */
final class KeywordMigrationReportColumn
{
    /** The report will include a column that contains the name of the account that owns the migrated keyword. */
    const AccountName = 'AccountName';

    /** The report will include a column that contains the identifier of the account that owns the migrated keyword. */
    const AccountId = 'AccountId';

    /** The report will include a column that contains the name of the campaign that owns the migrated keyword. */
    const CampaignName = 'CampaignName';

    /** The report will include a column that contains the identifier of the campaign that owns the migrated keyword. */
    const CampaignId = 'CampaignId';

    /** The report will include a column that contains the name of the ad group that defined the migrated keyword. */
    const AdGroupName = 'AdGroupName';

    /** The report will include a column that contains the identifier of the ad group that defined the migrated keyword. */
    const AdGroupId = 'AdGroupId';

    /** The report will include a column that contains the keyword. */
    const Keyword = 'Keyword';

    /** The report will include a column that contains the identifier of the keyword object. */
    const KeywordId = 'KeywordId';

    /** The report will include a column that contains the identifier of the keyword object from which this keyword and match type combination was moved. If the row is for the original keyword object, the value of this column is will be NULL. */
    const PreviousKeywordId = 'PreviousKeywordId';

    /** The report will include a column that identifies the bid match type of the keyword. The following are the possible values. */
    const BidMatchType = 'BidMatchType';
}
