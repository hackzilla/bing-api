<?php

namespace BingAds\Reporting;

/**
 * Defines the data columns that you can include in a tactic channel report.
 * @link http://msdn.microsoft.com/en-us/library/gg262851(v=msads.80).aspx TacticChannelReportColumn Value Set
 */
final class TacticChannelReportColumn
{
    /** The report will include a column that contains the account name. */
    const AccountName = 'AccountName';

    /** The report will include a column that contains the account number. */
    const AccountNumber = 'AccountNumber';

    /** The report will include a column that contains the account identifier. */
    const AccountId = 'AccountId';

    /** The report will include a column that contains the specified time period of each report row. */
    const TimePeriod = 'TimePeriod';

    /** The report will include a column that contains the name of the advertising tactic. */
    const Tactic = 'Tactic';

    /** The report will include a column that contains the name of the channel provider that displayed the ads. */
    const Channel = 'Channel';

    /** The report will include a column that contains the name of the campaign that you defined on a paid search provider other than Bing Ads. */
    const ThirdPartyCampaign = 'ThirdPartyCampaign';

    /** The report will include a column that contains the name of the ad group that you defined on a paid search provider other than Bing Ads. */
    const ThirdPartyAdGroup = 'ThirdPartyAdGroup';

    /** The report will include a column that contains the keyword to track that you defined on a paid search provider other than Bing Ads. */
    const ThirdPartyTerm = 'ThirdPartyTerm';

    /** The report will include a column that contains the campaign name. */
    const CampaignName = 'CampaignName';

    /** The report will include a column that contains the campaign identifier. */
    const CampaignId = 'CampaignId';

    /** The report will include a column that contains the ad group name. */
    const AdGroupName = 'AdGroupName';

    /** The report will include a column that contains the ad group identifier. */
    const AdGroupId = 'AdGroupId';

    /** The report will include a column that contains the keyword that matched the user's search query. */
    const Keyword = 'Keyword';

    /** The report will include a column that contains the keyword identifier. */
    const KeywordId = 'KeywordId';

    /** The report will include a column that contains the name of the goal. */
    const Goal = 'Goal';

    /** The report will include a column that contains the number of times that a user entered step 1 of the funnel. */
    const Step1Count = 'Step1Count';

    /** The report will include a column that contains the number of times that a user entered step 2 of the funnel. */
    const Step2Count = 'Step2Count';

    /** The report will include a column that contains the number of times that a user entered step 3 of the funnel. */
    const Step3Count = 'Step3Count';

    /** The report will include a column that contains the number of times that a user entered step 4 of the funnel. */
    const Step4Count = 'Step4Count';

    /** The report will include a column that contains the number of times that a user entered step 5 of the funnel. */
    const Step5Count = 'Step5Count';

    /** The report will include a column that contains the number of conversions for this goal. */
    const Conversions = 'Conversions';

    /** The report will include a column that contains the number of times that an entity (for example, an account, campaign, or ad group) contributed to the conversion of another entity. */
    const Assists = 'Assists';

    /** The report will include a column that contains the total spend on ads in the ad group for the specified time period. */
    const Spend = 'Spend';

    /** The report will include a column that contains the funnel conversion rate. The formula for calculating the conversion rate is (conversions / number of times that a user entered step 1 of the funnel) * 100. */
    const FunnelConversionRate = 'FunnelConversionRate';

    /** The report will include a column that contains the revenue reported by the advertiser from conversions. */
    const Revenue = 'Revenue';

    /** The report will include a column that contains the return on ad spend (ROAS). The formula for calculating the ROAS is (revenue that the ad generates / spend). */
    const ReturnOnAdSpend = 'ReturnOnAdSpend';
}
