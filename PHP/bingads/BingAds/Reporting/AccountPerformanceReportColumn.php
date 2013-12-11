<?php

namespace BingAds\Reporting;

/**
 * Defines the data columns that you can include in an account performance report.
 * @link http://msdn.microsoft.com/en-us/library/bb671947(v=msads.80).aspx AccountPerformanceReportColumn Value Set
 */
final class AccountPerformanceReportColumn
{
    /** The report will include a column that contains the account name. */
    const AccountName = 'AccountName';

    /** The report will include a column that contains the account number. */
    const AccountNumber = 'AccountNumber';

    /** The report will include a column that contains the time period of each report row. */
    const TimePeriod = 'TimePeriod';

    /** The report will include a column that identifies the currency that the account uses. For possible values, see the CurrencyType value set. */
    const CurrencyCode = 'CurrencyCode';

    /** The report will include a column that contains the ad distribution medium. For possible values, see the AdDistributionReportFilter value set. */
    const AdDistribution = 'AdDistribution';

    /** The report will include a column that contains the number of times that ads in the account were displayed in the Bing Ads results page. */
    const Impressions = 'Impressions';

    /** The report will include a column that contains the number of times that the ads in the account were clicked. */
    const Clicks = 'Clicks';

    /** The report will include a column that contains the click-through rate. The formula for calculating the CTR is (clicks / impressions) * 100. */
    const Ctr = 'Ctr';

    /** The report will include a column that contains the average cost-per-click (CPC). The formula for calculating the average CPC is (cost-per-click /clicks). */
    const AverageCpc = 'AverageCpc';

    /** The report will include a column that contains the cost per click (Cpc) spend. */
    const Spend = 'Spend';

    /** The report will include a column that contains the average position on the Bing Ads results page of the ads in the account. */
    const AveragePosition = 'AveragePosition';

    /** The report will include a column that contains the number of conversions of all ads in the account. */
    const Conversions = 'Conversions';

    /** The report will include a column that contains the conversion rate as a percentage. The formula for calculating the conversion rate is (conversions / clicks) * 100. */
    const ConversionRate = 'ConversionRate';

    /** The report will include a column that contains the cost per conversion. The formula for calculating the cost per conversion is (spend / conversions). */
    const CostPerConversion = 'CostPerConversion';

    /** The report will include a column that contains the number of low-quality clicks. Low-quality clicks are clicks that exhibit a low likelihood of commercial intent and for which customers are not billed. The following are some of the reasons that a click can be considered of low quality: */
    const LowQualityClicks = 'LowQualityClicks';

    /** The report will include a column that contains the low-quality clicks as a percentage. The formula for calculating the low quality clicks percentage is (low-quality clicks / clicks) * 100. */
    const LowQualityClicksPercent = 'LowQualityClicksPercent';

    /** The report will include a column that contains the number of low-quality impressions that result from low-quality keyword searches. */
    const LowQualityImpressions = 'LowQualityImpressions';

    /** The report will include a column that contains the low-quality impressions as a percentage. The formula for calculating the percentage is (low-quality impressions / impressions) * 100. */
    const LowQualityImpressionsPercent = 'LowQualityImpressionsPercent';

    /** The report will include a column that contains the number of conversions that originate from low-quality clicks. */
    const LowQualityConversions = 'LowQualityConversions';

    /** The report will include a column that contains the low-quality conversion rate as a percentage. The formula for calculating the conversion rate is (low-quality conversions / low-quality clicks) * 100. */
    const LowQualityConversionRate = 'LowQualityConversionRate';

    /** The report will include a column that contains the average of the cost-per-thousand impressions of the ads in the account. */
    const AverageCpm = 'AverageCpm';

    /** The report will include a column that contains the type of device where ads in the account were displayed. For possible values, see the DeviceTypeReportFilter value set. */
    const DeviceType = 'DeviceType';

    /** The report will include a column that contains the operating system of the device specified in the DeviceType column. If the operating system of the device cannot be determined or is not one of the operating systems that you can target, the value in this column will be Unknown. */
    const DeviceOS = 'DeviceOS';

    /** The report will include a column that contains the percentage of time your ads were displayed to users who searched by keywords that matched your keywords and targeting selections. */
    const ImpressionSharePercent = 'ImpressionSharePercent';

    /** The report will include a column that contains the percentage of time your ads would have been displayed to users, but were not because of a budget shortfall. */
    const ImpressionLostToBudgetPercent = 'ImpressionLostToBudgetPercent';

    /** The report will include a column that contains the percentage of time your ads would have been displayed to users, but were not because your ads ranked too low in the auction. You can improve your competitive position by increasing your bid, improving your quality score, or both. */
    const ImpressionLostToRankPercent = 'ImpressionLostToRankPercent';

    /** No longer supported. The following columns include the data that used to be reported in this column. */
    const ImpressionLostToRelevancePercent = 'ImpressionLostToRelevancePercent';

    /** No longer supported. */
    const ImpressionLostToOthersPercent = 'ImpressionLostToOthersPercent';

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
