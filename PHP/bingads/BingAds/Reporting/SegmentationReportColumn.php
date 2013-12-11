<?php

namespace BingAds\Reporting;

/**
 * Defines the data columns that you can include in a segmentation report.
 * @link http://msdn.microsoft.com/en-us/library/gg262857(v=msads.80).aspx SegmentationReportColumn Value Set
 */
final class SegmentationReportColumn
{
    /** The report will include a column that contains the account name. */
    const AccountName = 'AccountName';

    /** The report will include a column that contains the account number. */
    const AccountNumber = 'AccountNumber';

    /** The report will include a column that contains the account identifier. */
    const AccountId = 'AccountId';

    /** The report will include a column that contains the time period of each report row. */
    const TimePeriod = 'TimePeriod';

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

    /** The report will include a column that contains the age group of the users who clicked an ad in the ad group. For possible values, see the AgeGroupReportFilter value set. */
    const AgeGroup = 'AgeGroup';

    /** The report will include a column that contains the gender of users who clicked an ad in the ad group. For possible values, see the GenderReportFilter value set. */
    const Gender = 'Gender';

    /** The report will include a column that contains the country/region where the user who clicked the ad is located. */
    const Country = 'Country';

    /** The report will include a column that contains the state where the user who clicked the ad is located. */
    const State = 'State';

    /** The report will include a column that contains the metropolitan area where the user who clicked the ad is located. */
    const MetroArea = 'MetroArea';

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

    /** The report will include a column that contains the number of conversions for this goal. A conversion is considered step 6 of the funnel. */
    const Conversions = 'Conversions';

    /** The report will include a column that contains the number of times an entity (for example, an account, campaign, or ad group) contributed to the conversion on another entity. */
    const Assists = 'Assists';

    /** The report will include a column that contains the total spend on ads in the ad group for the time period. */
    const Spend = 'Spend';

    /** Include a column in the report that contains the funnel conversion rate. The formula for calculating the conversion rate is (conversions / number of times that the user entered step 1 of the funnel) * 100. */
    const FunnelConversionRate = 'FunnelConversionRate';

    /** The report will include a column that contains the revenue reported by the advertiser from conversions. */
    const Revenue = 'Revenue';

    /** The report will include a column that contains the return on ad spend (ROAS). The formula for calculating the ROAS is (revenue that the ad generates / spend). */
    const ReturnOnAdSpend = 'ReturnOnAdSpend';
}
