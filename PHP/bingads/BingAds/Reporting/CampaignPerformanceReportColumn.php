<?php

namespace BingAds\Reporting;

/**
 * Defines the data columns that you can include in a campaign performance report.
 * @link http://msdn.microsoft.com/en-us/library/bb671614(v=msads.90).aspx CampaignPerformanceReportColumn Value Set
 */
final class CampaignPerformanceReportColumn
{
    /** The report will include a column that contains the account name. */
    const AccountName = 'AccountName';

    /** The report will include a column that contains the account number. */
    const AccountNumber = 'AccountNumber';

    /** The report will include a column that contains the time period of each report row. */
    const TimePeriod = 'TimePeriod';

    /** The report will include a column that contains the status of the campaign. For possible values, see the CampaignStatusReportFilter value set. */
    const Status = 'Status';

    /** The report will include a column that contains the name of the campaign. */
    const CampaignName = 'CampaignName';

    /** The report will include a column that contains the identifier of the campaign. */
    const CampaignId = 'CampaignId';

    /** The report will include a column that contains the currency used by the account that owns the campaign. For possible values, see Currencies. */
    const CurrencyCode = 'CurrencyCode';

    /** The report will include a column that contains the ad distribution medium. For possible values, see the AdDistributionReportFilter value set. */
    const AdDistribution = 'AdDistribution';

    /** The report will include a column that contains the number of times that ads in the campaign were displayed on the Bing Ads results page. */
    const Impressions = 'Impressions';

    /** The report will include a column that contains the number of times that the ads in the campaign were clicked. */
    const Clicks = 'Clicks';

    /** The report will include a column that contains the click-through rate. The formula for calculating the click-through rate is (clicks / impressions) * 100. */
    const Ctr = 'Ctr';

    /** The report will include a column that contains the average cost per click (CPC). The formula for calculating the average CPC is (cost of clicks / clicks). */
    const AverageCpc = 'AverageCpc';

    /** The report will include a column that contains the cost per click (Cpc) spend. */
    const Spend = 'Spend';

    /** The report will include a column that contains the average position of the ads in the campaign on the Bing Ads results page. */
    const AveragePosition = 'AveragePosition';

    /** The report will include a column that contains the number of conversions of all ads in the campaign. */
    const Conversions = 'Conversions';

    /** The report will include a column that contains the conversion rate as a percentage. The formula for calculating the conversion rate is (conversions / clicks) * 100. */
    const ConversionRate = 'ConversionRate';

    /** The report will include a column that contains the cost per conversion. The formula for calculating the cost per conversion is (spend / conversions). */
    const CostPerConversion = 'CostPerConversion';

    /** The report will include a column that contains the number of low-quality clicks. Low-quality clicks exhibit a low likelihood of commercial intent; therefore, customers are not billed for them. The following are some of the reasons that a click can be considered of low quality. */
    const LowQualityClicks = 'LowQualityClicks';

    /** The report will include a column that contains the percentage of low-quality clicks. The formula for calculating the percentage is (low-quality clicks / clicks). */
    const LowQualityClicksPercent = 'LowQualityClicksPercent';

    /** The report will include a column that contains the number of low-quality impressions that result from low-quality keyword searches. */
    const LowQualityImpressions = 'LowQualityImpressions';

    /** The report will include a column that contains the percentage of low-quality impressions. The formula for calculating the percentage is (low-quality impressions /impressions). */
    const LowQualityImpressionsPercent = 'LowQualityImpressionsPercent';

    /** The report will include a column that contains the number of conversions that result from low-quality clicks. */
    const LowQualityConversions = 'LowQualityConversions';

    /** The report will include a column that contains the low-quality conversion rate as a percentage. The formula for calculating the conversion rate is (low-quality conversions / low-quality clicks). */
    const LowQualityConversionRate = 'LowQualityConversionRate';

    /** The report will include a column that contains the average of the cost per thousand impressions of the ads in the campaign. */
    const AverageCpm = 'AverageCpm';

    /** The report will include a column that contains the type of device where ads in the campaign were displayed. For possible values, see the DeviceTypeReportFilter value set. */
    const DeviceType = 'DeviceType';

    /** The report will include a column that contains the operating system of the device specified in the DeviceType column. If the operating system of the device cannot be determined or is not one of the operating systems that you can target, the value in this column will be Unknown. */
    const DeviceOS = 'DeviceOS';

    /** The report will include a column that contains the percentage of time your ads were displayed to users who searched by keywords that matched your keywords and targeting selections. */
    const ImpressionSharePercent = 'ImpressionSharePercent';

    /** The report will include a column that contains the percentage of time your ads would have been displayed to users, but were not because of a budget shortfall. */
    const ImpressionLostToBudgetPercent = 'ImpressionLostToBudgetPercent';

    /** The report will include a column that contains the percentage of time your ads would have been displayed to users, but were not because your ad ranked too low in the auction. You can improve your competitive position by increasing your bid, improving your quality score, or both. */
    const ImpressionLostToRankPercent = 'ImpressionLostToRankPercent';

    /** The report will include a column that contains a numeric quality score of the keyword. The score indicates the relevance of your keywords to search queries, and the degree to which your ads are eligible to be displayed in response to these queries. */
    const QualityScore = 'QualityScore';

    /** The report will include a column that contains a numeric score that indicates the keyword's relevance. The score reflects the competitiveness of your keywords and ad copy in the marketplace for the same search queries. */
    const KeywordRelevance = 'KeywordRelevance';

    /** The report will include a column that contains a numeric score that indicates the relevance of your ad and landing page to the search query. The score reflects the competitiveness of your keywords and ad copy in the marketplace for the same search queries. */
    const LandingPageRelevance = 'LandingPageRelevance';

    /** The report will include a column that contains a numeric score that is an aggregate assessment of the quality of all landing pages on your site. The score reflects the degree to which your landing pages adhere to Bing Ads Editorial Guidelines. */
    const LandingPageUserExperience = 'LandingPageUserExperience';

    /** The report will include a column that contains the historic quality score of the keyword. The historic quality score for each row is the value that was calculated for quality score on that date. Use the historic quality score to find out how quality score may have changed over time. For example, if you specify a time period that spans three days, the historic quality score for day one will be the quality score calculated on day one, the historic quality score for day two will be the quality score calculated on day two, and so on. This differs from the score in the QualityScore column, which will be the same value for each day in the time period. */
    const HistoricQualityScore = 'HistoricQualityScore';

    /** The report will include a column that contains a numeric score that indicates the relevance of the keyword. The score for each row is the score that was calculated for keyword relevance on that date. For example, if you specify a time period that spans three days, the score for row day one will be the score calculated on day one, the score for row day two will be the score calculated on day two, and so on. This differs from the score in the KeywordRelevance column, which will be the same value for each day in the time period. */
    const HistoricKeywordRelevance = 'HistoricKeywordRelevance';

    /** The report will include a column that contains a numeric score that indicates the relevance of your ad and landing page to the search query. The score for each row is the score that was calculated for landing page relevance on that date. For example, if you specify a time period that spans three days, the score for row day one will be the score calculated on day one, the score for row day two will be the score calculated on day two, and so on. This differs from the score in the LangingPageRelevance column, which will be the same value for each day in the time period. */
    const HistoricLandingPageRelevance = 'HistoricLandingPageRelevance';

    /** The report will include a column that contains a numeric score that is the aggregate assessment of the quality of all landing pages on your site. The score for each row is the score that was calculated for landing page user experience on that date. For example, if you specify a time period that spans three days, the score for row day one will be the score calculated on day one, the score for row day two will be the score calculated on day two, and so on. This differs from the score in the LangingPageUserExperience column, which will be the same value for each day in the time period. */
    const HistoricLandingPageUserExperience = 'HistoricLandingPageUserExperience';

    /** The report will include a column that contains the percentage of time your ads would have been displayed to users, but were not because your bid was too low or your bid and quality score was below minimum thresholds, which prevented you from entering the auction. */
    const ImpressionLostToBidPercent = 'ImpressionLostToBidPercent';

    /** The report will include a column that contains the percentage of time your ads would have been displayed to users, but were not due to one or both of the following reasons. */
    const ImpressionLostToLandingPageRelevancePercent = 'ImpressionLostToLandingPageRelevancePercent';

    /** The report will include a column that contains the percentage of time your ads would have been displayed to users, but were not because your ad copy was not relevant to the user's search query. */
    const ImpressionLostToKeywordRelevancePercent = 'ImpressionLostToKeywordRelevancePercent';

    /** The report will include a column that contains the number of times your tracked number was shown on all devices. */
    const PhoneImpressions = 'PhoneImpressions';

    /** The report will include a column that contains the number of total calls to the tracked phone number that showed with your ad. The formula for calculating the PhoneCalls is ManualCalls + ClickCalls. */
    const PhoneCalls = 'PhoneCalls';

    /** The report will include a column that contains the number of calls dialed manually from any device to the tracked phone number. */
    const ManualCalls = 'ManualCalls';

    /** The report will include a column that contains the number of phone calls initiated by clicks. */
    const ClickCalls = 'ClickCalls';

    /** The report will include a column that contains the phone-through rate (Ptr). The formula for calculating the Ptr is (PhoneCalls / PhoneImpressions) * 100. */
    const Ptr = 'Ptr';

    /** The report will include a column that contains the total cost for completed calls to your tracked number. */
    const PhoneSpend = 'PhoneSpend';

    /** The report will include a column that contains the average cost per phone call (CPP). */
    const AverageCpp = 'AverageCpp';

    /** The report will include a column that contains the total cost for cost for click spend and phone call spend combined. The formula for calculating the TotalCostPhoneAndClicks is Spend + PhoneSpend. */
    const TotalCostPhoneAndClicks = 'TotalCostPhoneAndClicks';

    /** The report will include a column that contains the network of the ad group that owns the ad. For possible values, see the Network value set. */
    const Network = 'Network';

    /** The report will include a column that indicates whether the ad impression appeared in a top position or elsewhere. The following is a list of possible values. */
    const TopVsOther = 'TopVsOther';
}
