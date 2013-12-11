<?php

namespace BingAds\Reporting;

/**
 * Defines the data columns that you can include in a negative-keyword conflict report.
 * @link http://msdn.microsoft.com/en-us/library/hh560535(v=msads.90).aspx NegativeKeywordConflictReportColumn Value Set
 */
final class NegativeKeywordConflictReportColumn
{
    /** The report will include a column that contains the account name. */
    const AccountName = 'AccountName';

    /** The report will include a column that contains the account number. */
    const AccountNumber = 'AccountNumber';

    /** The report will include a column that contains the account identifier. */
    const AccountId = 'AccountId';

    /** The report will include a column that contains the campaign name. */
    const CampaignName = 'CampaignName';

    /** The report will include a column that contains the campaign identifier. */
    const CampaignId = 'CampaignId';

    /** The report will include a column that contains the ad group name. */
    const AdGroupName = 'AdGroupName';

    /** The report will include a column that contains the ad group identifier. */
    const AdGroupId = 'AdGroupId';

    /** The keyword. */
    const Keyword = 'Keyword';

    /** The keyword identifier. */
    const KeywordId = 'KeywordId';

    /** The negative keyword that conflicts with the keyword using a phrase-match comparison. */
    const NegativeKeyword = 'NegativeKeyword';

    /** The report will include a column that identifies the level where the conflict occurs. The possible values are: */
    const ConflictLevel = 'ConflictLevel';
}
