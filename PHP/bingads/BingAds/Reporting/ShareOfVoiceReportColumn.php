<?php

namespace BingAds\Reporting;

/**
 * Defines the data columns that you can include in a share of voice report.
 * @link http://msdn.microsoft.com/en-us/library/jj592910(v=msads.90).aspx ShareOfVoiceReportColumn Value Set
 */
final class ShareOfVoiceReportColumn
{
    /** The report will include a column that contains the account name. */
    const AccountName = 'AccountName';

    /** The report will include a column that contains the time period of each report row. */
    const TimePeriod = 'TimePeriod';

    /** The report will include a column that contains the campaign name. */
    const CampaignName = 'CampaignName';

    /** The report will include a column that contains the ad group name. */
    const AdGroupName = 'AdGroupName';

    /** The report will include a column that contains the keyword that matched the user's search query. */
    const Keyword = 'Keyword';

    /** The report will include a column that contains the delivered match type. For possible values, see the DeliveredMatchTypeReportFilter value set. */
    const DeliveredMatchType = 'DeliveredMatchType';

    /** The report will include a column that contains the bid match type. For possible values, see the BidMatchTypeReportFilter value set. */
    const BidMatchType = 'BidMatchType';

    /** The report will include a column that contains the language used by the website that displayed the ad. */
    const Language = 'Language';

    /** The report will include a column that contains the account number. */
    const AccountNumber = 'AccountNumber';

    /** The report will include a column that contains the account identifier. */
    const AccountId = 'AccountId';

    /** The report will include a column that contains the keyword identifier. */
    const KeywordId = 'KeywordId';

    /** The report will include a column that contains the ad group identifier. */
    const AdGroupId = 'AdGroupId';

    /** The report will include a column that contains the campaign identifier. */
    const CampaignId = 'CampaignId';

    /** The report will include a column that contains the number of times that ads in the campaign were displayed on the Bing Ads results page. */
    const Impressions = 'Impressions';

    /** The report will include a column that contains the number of times that the ad was clicked. */
    const Clicks = 'Clicks';

    /** The report will include a column that contains the click-through rate. The formula for calculating the click-through rate is (clicks / impressions) * 100. */
    const Ctr = 'Ctr';

    /** The report will include a column that contains the average cost per click (CPC). The formula for calculating the average CPC is (cost of clicks / clicks). */
    const AverageCpc = 'AverageCpc';

    /** The report will include a column that contains the total spend on the ad for the specified time period. */
    const Spend = 'Spend';

    /** The report will include a column that contains the average position of the ad on the Bing Ads results page. */
    const AveragePosition = 'AveragePosition';

    /** The report will include a column that contains the percentage of time your ads were served to users who searched by keywords that matched your keywords and targeting selections. */
    const ImpressionSharePercent = 'ImpressionSharePercent';

    /** The report will include a column that contains the percentage of time your ads would have been displayed to users, but were not because of a budget shortfall. */
    const ImpressionLostToBudgetPercent = 'ImpressionLostToBudgetPercent';

    /** The report will include a column that contains the percentage of time your ads would have been displayed to users, but were not because your ad ranked too low in the auction. You can improve your competitive position by increasing your bid, improving your quality score, or both. */
    const ImpressionLostToRankPercent = 'ImpressionLostToRankPercent';

    /** The report will include a column that contains the percentage of time your ads would have been displayed to users, but were not due to one or both of the following reasons. */
    const ImpressionLostToLandingPageRelevancePercent = 'ImpressionLostToLandingPageRelevancePercent';

    /** The report will include a column that contains the percentage of time your ads would have been displayed to users, but were not because your ad copy was not relevant to the user's search query. */
    const ImpressionLostToKeywordRelevancePercent = 'ImpressionLostToKeywordRelevancePercent';

    const ImpressionLostToRelevancePercent = 'ImpressionLostToRelevancePercent';

    /** The report will include a column that contains the percentage of time your ads would have been displayed to users, but were not because your bid was too low or your bid and quality score was below minimum thresholds, which prevented you from entering the auction. */
    const ImpressionLostToBidPercent = 'ImpressionLostToBidPercent';

    /** The report will include a column that contains the maximum cost-per-click. */
    const CurrentMaxCpc = 'CurrentMaxCpc';

    /** The report will include a column that contains a numeric quality score of the keyword. The score indicates the relevance of your keywords to search queries, and the degree to which your ads are eligible to be displayed in response to these queries. */
    const QualityScore = 'QualityScore';

    /** The report will include a column that contains a numeric score that indicates the keyword's relevance. The score reflects the competitiveness of your keywords and ad copy in the marketplace for the same search queries. */
    const KeywordRelevance = 'KeywordRelevance';

    /** The report will include a column that contains a numeric score that indicates the relevance of your ad and landing page to the search query. The score reflects the competitiveness of your keywords and ad copy in the marketplace for the same search queries. */
    const LandingPageRelevance = 'LandingPageRelevance';

    /** The report will include a column that contains a numeric score that is an aggregate assessment of the quality of all landing pages on your site. The score reflects the degree to which your landing pages adhere to Bing Ads Editorial Guidelines. */
    const LandingPageUserExperience = 'LandingPageUserExperience';

    /** The report will include a column that contains the number of conversions. */
    const Conversions = 'Conversions';

    /** The report will include a column that contains the conversion rate as a percentage. The formula for calculating the conversion rate is (conversions / clicks) * 100. */
    const ConversionRate = 'ConversionRate';

    /** The report will include a column that contains the cost per conversion. The formula for calculating the cost per conversion is (spend / conversions). */
    const CostPerConversion = 'CostPerConversion';

    /** The report will include a column that contains the ad distribution medium. For possible values, see the AdDistributionReportFilter value set. */
    const AdDistribution = 'AdDistribution';

    /** The report will include a column that contains the percentage of time your ads were clicked relative to all ads clicked by users who searched by keywords that matched your keywords and targeting selections. */
    const ClickSharePercent = 'ClickSharePercent';
}
