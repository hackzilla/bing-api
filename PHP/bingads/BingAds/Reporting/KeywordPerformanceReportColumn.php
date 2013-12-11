<?php

namespace BingAds\Reporting;

/**
 * Defines the data columns that you can include in a keyword performance report.
 * @link http://msdn.microsoft.com/en-us/library/bb672087(v=msads.80).aspx KeywordPerformanceReportColumn Value Set
 */
final class KeywordPerformanceReportColumn
{
    /** The report will include a column that contains the account name. */
    const AccountName = 'AccountName';

    /** The report will include a column that contains the account number. */
    const AccountNumber = 'AccountNumber';

    /** The report will include a column that contains the account identifier. */
    const AccountId = 'AccountId';

    /** The report will include a column that contains the time period of each report row. */
    const TimePeriod = 'TimePeriod';

    /** Do not use this column; it is for backwards compatibility only. Instead, use the Language column. */
    const LanguageAndRegion = 'LanguageAndRegion';

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

    /** The report will include a column that contains the keyword identifier. For information about whether you should include this column or the KeywordMatchTypeId column, see the Remarks section. */
    const KeywordId = 'KeywordId';

    /** The report will include a column that contains the ad identifier. */
    const AdId = 'AdId';

    /** The report will include a column that contains the ad type. For possible values, see the AdTypeReportFilter value set. */
    const AdType = 'AdType';

    /** The report will include a column that contains the destination URL. If the destination URL specified in the ad contains substitution parameters, the report will contain the URL after parameter substitution occurs. */
    const DestinationUrl = 'DestinationUrl';

    /** The report will include a column that contains the maximum cost-per-click. */
    const CurrentMaxCpc = 'CurrentMaxCpc';

    /** The report will include a column that contains the currency used by the account to which the ad belongs. For possible values, see the CurrencyType value set. */
    const CurrencyCode = 'CurrencyCode';

    /** The report will include a column that contains the delivered match type. */
    const MatchType = 'MatchType';

    /** The report will include a column that contains the ad distribution medium. For possible values, see the AdDistributionReportFilter value set. */
    const AdDistribution = 'AdDistribution';

    /** The report will include a column that contains the number of times that the ad was displayed on the Bing Ads results page. */
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

    /** The report will include a column that contains the number of conversions. */
    const Conversions = 'Conversions';

    /** The report will include a column that contains the conversion rate as a percentage. The formula for calculating the conversion rate is (conversions / clicks) * 100. */
    const ConversionRate = 'ConversionRate';

    /** The report will include a column that contains the cost per conversion. The formula for calculating the cost per conversion is (spend / conversions). */
    const CostPerConversion = 'CostPerConversion';

    /** The report will include a column that contains the average of the cost per thousand impressions (CPM) of the ad. */
    const AverageCpm = 'AverageCpm';

    /** The report will include a column that contains the pricing model of the ad group that owns the ad. Possible values include Cost per click and Cost per 1000 impressions. */
    const PricingModel = 'PricingModel';

    /** The report will include a column that contains the Bing Ads cashback rebate status. */
    const Cashback = 'Cashback';

    /** The report will include a column that contains the bid match type. For possible values, see the BidMatchTypeReportFilter value set. */
    const BidMatchType = 'BidMatchType';

    /** The report will include a column that contains the type of device on which the ad appeared. For a list of possible values, see DeviceTypeReportFilter. */
    const DeviceType = 'DeviceType';

    /** The report will include a column that contains the keyword's quality score. The score indicates the keyword's relevance to search queries, and the degree to which your ads are eligible to be served based on the search queries. */
    const QualityScore = 'QualityScore';

    /** The report will include a column that contains a numeric score that indicates the keyword's relevance. The score reflects the competitiveness of your keywords and ad copy in the marketplace for the same search queries. */
    const KeywordRelevance = 'KeywordRelevance';

    /** The report will include a column that contains a numeric score that indicates the relevance of your ad and landing page to the search query. The score reflects the competitiveness of your keywords and ad copy in the marketplace for the same search queries. */
    const LandingPageRelevance = 'LandingPageRelevance';

    /** The report will include a column that contains a numeric score that is an aggregate assessment of the quality of all landing pages on your site. The score reflects the degree to which your landing pages adhere to Bing Ads Editorial Guidelines. */
    const LandingPageUserExperience = 'LandingPageUserExperience';

    /** The report will include a column that contains the language used by the website that displayed the ad. */
    const Language = 'Language';

    /** The report will include a column that contains the historic quality score of the keyword. The historic quality score for each row is the value that was calculated for quality score on that date. Use the historic quality score to find out how quality score may have changed over time. For example, if you specify a time period that spans three days, the historic quality score for day one will be the quality score calculated on day one, the historic quality score for day two will be the quality score calculated on day two, and so on. This differs from the score in the QualityScore column, which will be the same value for each day in the time period. */
    const HistoricQualityScore = 'HistoricQualityScore';

    /** The report will include a column that contains a numeric score that indicates the relevance of the keyword. The score for each row is the score that was calculated for keyword relevance on that date. For example, if you specify a time period that spans three days, the score for row day 1 will be the score calculated on day 1, the score for row day 2 will be the score calculated on day 2, and so on. This differs from the score in the KeywordRelevance column, which will be the same value for each day in the time period. */
    const HistoricKeywordRelevance = 'HistoricKeywordRelevance';

    /** The report will include a column that contains a numeric score that indicates the relevance of your ad and landing page to the search query. The score for each row is the score that was calculated for landing page relevance on that date. For example, if you specify a time period that spans three days, the score for row day 1 will be the score calculated on day 1, the score for row day 2 will be the score calculated on day 2, and so on. This differs from the score in the LangingPageRelevance column, which will be the same value for each day in the time period. */
    const HistoricLandingPageRelevance = 'HistoricLandingPageRelevance';

    /** The report will include a column that contains a numeric score that is the aggregate assessment of the quality of all landing pages on your site. The score for each row is the score that was calculated for landing page user experience on that date. For example, if you specify a time period that spans three days, the score for row day 1 will be the score calculated on day 1, the score for row day 2 will be the score calculated on day 2, and so on. This differs from the score in the LangingPageUserExperience column, which will be the same value for each day in the time period. */
    const HistoricLandingPageUserExperience = 'HistoricLandingPageUserExperience';

    /** The report will include a column that contains an identifier that uniquely identifies the keyword and match-type combination. For information about whether you should include this column or the KeywordId column and the impact that each has on how the data is aggregated, see the Remarks section. */
    const KeywordMatchTypeId = 'KeywordMatchTypeId';

    /** The report will include a column that contains one of the following values that indicates the possible increase in the number of impressions that the keyword could receive if its quality score improved above a 5 (underperforming). */
    const QualityImpact = 'QualityImpact';

    /** Reserved for internal use. */
    const BusinessListingId = 'BusinessListingId';

    /** Reserved for internal use. */
    const BusinessListingName = 'BusinessListingName';

    /** Reserved for internal use. */
    const BusinessCategoryId = 'BusinessCategoryId';

    /** Reserved for internal use. */
    const BusinessCategoryName = 'BusinessCategoryName';

    /** The report will include a column that contains the campaign status. */
    const CampaignStatus = 'CampaignStatus';

    /** The report will include a column that contains the account status. */
    const AccountStatus = 'AccountStatus';

    /** The report will include a column that contains the ad group status. */
    const AdGroupStatus = 'AdGroupStatus';

    /** The report will include a column that contains the keyword status. */
    const KeywordStatus = 'KeywordStatus';

    /** The report will include a column that contains the network of the ad group that owns the ad. For possible values, see the Network value set. */
    const Network = 'Network';

    /** The report will include a column that indicates whether the ad impression appeared in a top position or elsewhere. The following is a list of possible values. */
    const TopVsOther = 'TopVsOther';
}
