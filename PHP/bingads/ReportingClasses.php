<?php
// Generated on 8/9/2013 5:26:25 AM

namespace BingAds\Reporting;

/**
 * Defines the file formats that you can use for a report.
 * @link http://msdn.microsoft.com/en-us/library/bb671932(v=msads.80).aspx ReportFormat Value Set
 */
final class ReportFormat
{
    /** The report format will be comma-separated values (.csv). */
    const Csv = 'Csv';

    /** The report format will be tab-separated values (.tsv). */
    const Tsv = 'Tsv';

    /** The report format will be XML (.xml). */
    const Xml = 'Xml';
}

/**
 * Defines the language values that you can use for a report.
 * @link http://msdn.microsoft.com/en-us/library/bb671595(v=msads.80).aspx ReportLanguage Value Set
 */
final class ReportLanguage
{
    /** The report columns will be in English. */
    const English = 'English';

    /** The report columns will be in French. */
    const French = 'French';
}

/**
 * Defines the status of a report.
 * @link http://msdn.microsoft.com/en-us/library/bb671578(v=msads.80).aspx ReportRequestStatusType Value Set
 */
final class ReportRequestStatusType
{
    /** An error occurred while generating the report. You will need to submit your report request again. If the request continues to fail, consider getting the tracking identifier from the response message and contacting support. */
    const Error = 'Error';

    /** The report was successfully completed. */
    const Success = 'Success';

    /** The report is not yet complete. */
    const Pending = 'Pending';
}

/**
 * Defines the data columns that you can include in a budget summary report.
 * @link http://msdn.microsoft.com/en-us/library/bb671925(v=msads.80).aspx BudgetSummaryReportColumn Value Set
 */
final class BudgetSummaryReportColumn
{
    /** The report will include a column that contains the account name. */
    const AccountName = 'AccountName';

    /** The report will include a column that contains the account number. */
    const AccountNumber = 'AccountNumber';

    /** The report will include a column that contains the campaign name. */
    const CampaignName = 'CampaignName';

    /** The report will include a column that contains the date that this report applies to. */
    const Date = 'Date';

    /** The report will include a column that contains the currency used by the account that owns the campaign. For possible values, see the CurrencyType value set. */
    const CurrencyCode = 'CurrencyCode';

    /** The report will include a column that contains the budgeted amount of money to spend per month. */
    const MonthlyBudget = 'MonthlyBudget';

    /** The report will include a column that contains the budgeted amount of money to spend per day. */
    const DailySpend = 'DailySpend';

    /** The report will include a column that contains the amount of money spent to date for the month. */
    const MonthToDateSpend = 'MonthToDateSpend';
}

/**
 * Defines the predefined time and date range values for a budget summary report request.
 * @link http://msdn.microsoft.com/en-us/library/bb671612(v=msads.80).aspx BudgetSummaryReportTimePeriod Value Set
 */
final class BudgetSummaryReportTimePeriod
{
    /** A cumulative report for the current day. */
    const Today = 'Today';

    /** A cumulative report for the previous day. */
    const Yesterday = 'Yesterday';

    /** A cumulative report for the previous seven days, having one row for each day. */
    const LastSevenDays = 'LastSevenDays';

    /** A cumulative report for the current calendar month. */
    const ThisMonth = 'ThisMonth';

    /** A cumulative report for the previous calendar month. */
    const LastMonth = 'LastMonth';
}

/**
 * Defines the aggregation values for reports that cannot specify hourly aggregation.
 * @link http://msdn.microsoft.com/en-us/library/bb672057(v=msads.80).aspx NonHourlyReportAggregation Value Set
 */
final class NonHourlyReportAggregation
{
    /** The report data will be aggregated for the entire specified report time. */
    const Summary = 'Summary';

    /** The report data will be aggregated for each day. */
    const Daily = 'Daily';

    /** The report data is aggregated for each week. */
    const Weekly = 'Weekly';

    /** The report data will be aggregated for each month. */
    const Monthly = 'Monthly';

    /** The report data is aggregated for each year. */
    const Yearly = 'Yearly';
}

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

/**
 * Defines the age range values that you can use to filter the report data. These values are also used as column values in reports that include age group information, such as the segmentation report.
 * @link http://msdn.microsoft.com/en-us/library/gg262848(v=msads.80).aspx AgeGroupReportFilter Value Set
 */
final class AgeGroupReportFilter
{
    /** The report will include users whose age is unknown. */
    const Unknown = 'Unknown';

    /** The report will include users up to 12 years old. */
    const Ages0to12 = 'Ages0to12';

    /** The report will include users in the age range of 13 to 17. */
    const Ages13to17 = 'Ages13to17';

    /** The report will include users in the age range of 18 to 24. */
    const Ages18to24 = 'Ages18to24';

    /** The report will include users in the age range of 25 to 34. */
    const Ages25to34 = 'Ages25to34';

    /** The report will include users in the age range of 35 to 49. */
    const Ages35to49 = 'Ages35to49';

    /** The report will include users in the age range of 50 to 64. */
    const Ages50to64 = 'Ages50to64';

    /** The report will include users in the age range of 65 and older. */
    const Ages65plus = 'Ages65plus';
}

/**
 * Defines the country/region values that you can use to filter the report data. These values are also used as column values in reports that include country/region, such as the metro area demographic performance report.
 * @link http://msdn.microsoft.com/en-us/library/bb672092(v=msads.80).aspx CountryReportFilter Value Set
 */
final class CountryReportFilter
{
    /** The report will include data for accounts that operate in Canada. */
    const Canada = 'Canada';

    /** The report will include data for accounts that operate in France. */
    const France = 'France';

    /** The report will include data for accounts that operate in Singapore. */
    const Singapore = 'Singapore';

    /** The report will include data for accounts that operate in the United Kingdom. */
    const UnitedKingdom = 'UnitedKingdom';

    /** The report will include data for accounts that operate in the United States. */
    const UnitedStates = 'UnitedStates';
}

/**
 * Defines the gender values that you can use to filter the report data. These values are also used as column values in reports that include gender information, such as the segmentation performance report.
 * @link http://msdn.microsoft.com/en-us/library/gg262856(v=msads.80).aspx GenderReportFilter Value Set
 */
final class GenderReportFilter
{
    /** The report will include data where the gender of the user that generated the traffic is unknown. */
    const Unknown = 'Unknown';

    /** The report will include data where male users generated the traffic. */
    const Male = 'Male';

    /** The report will include data where female users generated the traffic. */
    const Female = 'Female';
}

/**
 * Defines the predefined time and date range values for a report request.
 * @link http://msdn.microsoft.com/en-us/library/bb671772(v=msads.80).aspx ReportTimePeriod Value Set
 */
final class ReportTimePeriod
{
    /** A cumulative report for the current day. */
    const Today = 'Today';

    /** A cumulative report for the previous day. */
    const Yesterday = 'Yesterday';

    /** A report for the previous seven days, one row for each day. */
    const LastSevenDays = 'LastSevenDays';

    /** A cumulative report for the current calendar week. */
    const ThisWeek = 'ThisWeek';

    /** A cumulative report for the previous calendar week. */
    const LastWeek = 'LastWeek';

    /** A cumulative report for the four calendar weeks prior to today. */
    const LastFourWeeks = 'LastFourWeeks';

    /** A cumulative report for the current calendar month. */
    const ThisMonth = 'ThisMonth';

    /** A cumulative report for the previous calendar month. */
    const LastMonth = 'LastMonth';

    /** A cumulative report for the previous three calendar months. */
    const LastThreeMonths = 'LastThreeMonths';

    /** A cumulative report for the previous six calendar months. */
    const LastSixMonths = 'LastSixMonths';

    /** A cumulative report for the current calendar year. */
    const ThisYear = 'ThisYear';

    /** A cumulative report for the previous calendar year. */
    const LastYear = 'LastYear';
}

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

/**
 * Defines the aggregation values that you can use for a report.
 * @link http://msdn.microsoft.com/en-us/library/bb672067(v=msads.80).aspx ReportAggregation Value Set
 */
final class ReportAggregation
{
    /** The report data will be aggregated for the entire specified report time. */
    const Summary = 'Summary';

    /** The report data will be aggregated for each hour. */
    const Hourly = 'Hourly';

    /** The report data will be aggregated for each day. */
    const Daily = 'Daily';

    /** The report data will be aggregated for each week. */
    const Weekly = 'Weekly';

    /** The report data will be aggregated for each month. */
    const Monthly = 'Monthly';

    /** The report data will be aggregated for each year. */
    const Yearly = 'Yearly';

    const HourOfDay = 'HourOfDay';

    const DayOfWeek = 'DayOfWeek';
}

/**
 * Defines the data columns that you can include in a behavioral segment performance report.
 * @link http://msdn.microsoft.com/en-us/library/dd796960(v=msads.80).aspx BehavioralPerformanceReportColumn Value Set
 */
final class BehavioralPerformanceReportColumn
{
    /** The report will include a column that contains the account name. */
    const AccountName = 'AccountName';

    /** The report will include a column that contains the account number. */
    const AccountNumber = 'AccountNumber';

    /** The report will include a column that contains the account identifier. */
    const AccountId = 'AccountId';

    /** The report will include a column that contains the time period of each report row. */
    const TimePeriod = 'TimePeriod';

    /** The report will include a column that contains the Bing Ads website that displayed the ad. */
    const LanguageAndRegion = 'LanguageAndRegion';

    /** The report will include a column that contains the campaign name. */
    const CampaignName = 'CampaignName';

    /** The report will include a column that contains the campaign identifier. */
    const CampaignId = 'CampaignId';

    /** The report will include a column that contains the ad group name. */
    const AdGroupName = 'AdGroupName';

    /** The report will include a column that contains the ad group identifier. */
    const AdGroupId = 'AdGroupId';

    /** The report will include a column that contains the behavioral segment identifier. */
    const BehavioralId = 'BehavioralId';

    /** The report will include a column that contains the behavioral segment name. */
    const BehavioralName = 'BehavioralName';

    /** The report will include a column that contains the ad identifier. */
    const AdId = 'AdId';

    /** The report will include a column that contains the destination URL. */
    const DestinationUrl = 'DestinationUrl';

    /** The report will include a column that contains the maximum cost-per-click for the behavioral segment. */
    const CurrentMaxCpc = 'CurrentMaxCpc';

    /** The report will include a column that contains the currency code. */
    const CurrencyCode = 'CurrencyCode';

    /** The report will include a column that contains the match type. */
    const MatchType = 'MatchType';

    /** The report will include a column that contains the ad distribution medium. */
    const AdDistribution = 'AdDistribution';

    /** The report will include a column that contains the number of impressions. */
    const Impressions = 'Impressions';

    /** The report will include a column that contains the number of times that the ad was clicked. */
    const Clicks = 'Clicks';

    /** The report will include a column that contains the click-through rate. The click-through rate (CTR) is the ratio of the number of times that an ad is clicked to the number of ad impressions. */
    const Ctr = 'Ctr';

    /** The report will include a column that contains the average cost per click. */
    const AverageCpc = 'AverageCpc';

    /** The report will include a column that contains the total amount of money spent for the time period. */
    const Spend = 'Spend';

    /** The report will include a column that contains the average position of the ad in paid results. */
    const AveragePosition = 'AveragePosition';

    /** The report will include a column that contains the number of conversions. */
    const Conversions = 'Conversions';

    /** The report will include a column that contains the conversion rate. */
    const ConversionRate = 'ConversionRate';

    /** The report will include a column that contains the cost per conversion. */
    const CostPerConversion = 'CostPerConversion';

    /** The report will include a column that contains the ad type. */
    const AdType = 'AdType';

    /** Specifies the cost-per-thousand-impressions. */
    const AverageCpm = 'AverageCpm';

    /** The report will include a column that contains the pricing model of the ad group that owns the ad. Possible values include Cost per click and Cost per 1000 impressions. */
    const PricingModel = 'PricingModel';
}

/**
 * Defines the ad distribution medium values that you can use to filter the report data. These values are also used as column values in reports that include ad distribution, such as the account performance report.
 * @link http://msdn.microsoft.com/en-us/library/bb671722(v=msads.80).aspx AdDistributionReportFilter Value Set
 */
final class AdDistributionReportFilter
{
    /** The report will contain search ads. */
    const Search = 'Search';

    /** The report will contain content ads. */
    const Content = 'Content';
}

/**
 * Defines the ad type values that you can use to filter the report data. These values are also used as column values in reports that include the ad type, such as the ad performance report.
 * @link http://msdn.microsoft.com/en-us/library/cc580687(v=msads.80).aspx AdTypeReportFilter Value Set
 */
final class AdTypeReportFilter
{
    /** The report will include text ads. */
    const Text = 'Text';

    /** The report will include mobile ads. */
    const Mobile = 'Mobile';

    /** Not supported. */
    const Image = 'Image';

    /** Not supported. */
    const Local = 'Local';

    /** Not supported. */
    const RichMedia = 'RichMedia';

    /** The report will contain creative ads that are served by third parties. */
    const ThirdPartyCreative = 'ThirdPartyCreative';

    /** The report will include rich ads. */
    const RichAd = 'RichAd';

    /** The report will include product ads. */
    const Product = 'Product';
}

/**
 * Defines the delivered match type values that you can use to filter the report data. These values are also used as column values in reports that include match type, such as the keyword performance report.
 * @link http://msdn.microsoft.com/en-us/library/bb671749(v=msads.80).aspx DeliveredMatchTypeReportFilter Value Set
 */
final class DeliveredMatchTypeReportFilter
{
    /** The report will contain ads that were delivered by using an exact match comparison. */
    const Exact = 'Exact';

    /** The report will contain ads that were delivered by using a phrase match comparison. */
    const Phrase = 'Phrase';

    /** The report will contain ads that were delivered using a broad match comparison. */
    const Broad = 'Broad';

    /** The report will contain ads that were delivered by using a content match comparison. */
    const Content = 'Content';
}

/**
 * Defines the Bing Ads website values that you can use to filter the report data.
 * @link http://msdn.microsoft.com/en-us/library/bb671573(v=msads.80).aspx LanguageAndRegionReportFilter Value Set
 */
final class LanguageAndRegionReportFilter
{
    /** The report will include ads that were displayed on the Bing Ads English-language website in Canada. */
    const EnglishCanada = 'EnglishCanada';

    /** The report will include ads that were displayed on the Bing Ads French-language website in Canada. */
    const FrenchCanada = 'FrenchCanada';

    /** The report will include ads that were displayed on the Bing Ads website in France. */
    const France = 'France';

    /** The report will include ads that were displayed on the Bing Ads website in Singapore. */
    const Singapore = 'Singapore';

    /** The report will include ads that were displayed on the Bing Ads website in the United Kingdom. */
    const UnitedKingdom = 'UnitedKingdom';

    /** The report will include ads that were displayed on the Bing Ads website in the United States. */
    const UnitedStates = 'UnitedStates';
}

/**
 * Defines the aggregation values that you can use in a search query performance report.
 * @link http://msdn.microsoft.com/en-us/library/ee703960(v=msads.80).aspx SearchQueryReportAggregation Value Set
 */
final class SearchQueryReportAggregation
{
    /** The report data will be aggregated for the entire specified report time. */
    const Summary = 'Summary';

    /** The report data will be aggregated for each hour. */
    const Hourly = 'Hourly';

    /** The report data will be aggregated for each day. */
    const Daily = 'Daily';

    /** The report data will be aggregated for each week. */
    const Weekly = 'Weekly';

    /** The report data will be aggregated for each month. */
    const Monthly = 'Monthly';
}

/**
 * Defines the data columns that you can include in a search query performance report.
 * @link http://msdn.microsoft.com/en-us/library/ee703958(v=msads.80).aspx SearchQueryPerformanceReportColumn Value Set
 */
final class SearchQueryPerformanceReportColumn
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

    /** The report will include a column that contains the ad identifier. */
    const AdId = 'AdId';

    /** The report will include a column that contains the ad type. For possible values, see the AdTypeReportFilter value set. */
    const AdType = 'AdType';

    /** The report will include a column that contains the destination URL. If the destination URL specified in the ad contains substitution parameters, the report will contain the URL after parameter substitution occurs. */
    const DestinationUrl = 'DestinationUrl';

    const BidMatchType = 'BidMatchType';

    /** The report will include a column that contains the delivered match type. For possible values, see the DeliveredMatchTypeReportFilter value set. */
    const MatchType = 'MatchType';

    /** Do not use this column; it is for backwards compatibility only. Instead, use the Language column. */
    const LanguageAndRegion = 'LanguageAndRegion';

    /** The report will include a column that contains the status of the campaign. */
    const CampaignStatus = 'CampaignStatus';

    /** The report will include a column that contains the status of the ad. */
    const AdStatus = 'AdStatus';

    /** In search query reports, impressions are not reported the same way as they are in other types of reports, such as keyword performance reports. The number of impressions listed in a search query report might be just a fraction of the total impressions that are generated for a search query. The report displays only impressions that result in at least one click during a one-hour reporting period. For example, if a search query results in one or more clicks during hour one, all impressions during hour one are reported. If the same search query results in zero clicks during hour two, no impressions are reported for hour two. */
    const Impressions = 'Impressions';

    /** The report will include a column that contains the number of times that the ad was clicked. */
    const Clicks = 'Clicks';

    /** The report will include a column that contains the click-through rate. The formula for calculating the click-through rate is (clicks / impressions) * 100. */
    const Ctr = 'Ctr';

    /** The report will include a column that contains the average cost-per-click (CPC). The formula for calculating the average CPC is (cost of clicks / clicks). */
    const AverageCpc = 'AverageCpc';

    /** The report will include a column that contains the total spend on the ad for the specified time period. */
    const Spend = 'Spend';

    /** The report will include a column that contains the average position of the ad on the Bing Ads results page. */
    const AveragePosition = 'AveragePosition';

    /** The report will include a column that contains the search query string. */
    const SearchQuery = 'SearchQuery';

    /** The report will include a column that contains the keyword that matched the search query. */
    const Keyword = 'Keyword';

    /** The report will include a column that contains the number of conversions. */
    const Conversions = 'Conversions';

    /** The report will include a column that contains the conversion rate as a percentage. The formula for calculating the conversion rate is (conversions / clicks) * 100. */
    const ConversionRate = 'ConversionRate';

    /** The report will include a column that contains the cost per conversion. The formula for calculating the cost per conversion is (spend / conversions). */
    const CostPerConversion = 'CostPerConversion';

    /** The report will include a column that contains the language used by the website that displayed the ad. */
    const Language = 'Language';

    /** The report will include a column that contains the identifier of the keyword that matched the search query. */
    const KeywordId = 'KeywordId';
}

/**
 * Defines the ad status values that you can use to filter the report data. These values are also used as column values in reports that include ad status, such as the search query performance report.
 * @link http://msdn.microsoft.com/en-us/library/hh560533(v=msads.80).aspx AdStatusReportFilter Value Set
 */
final class AdStatusReportFilter
{
    /** The same meaning as Active. This value is maintained for backward compatibility; however, you should use Active instead. */
    const Submitted = 'Submitted';

    /** The report will contain ads that have been rejected by editorial review. */
    const Rejected = 'Rejected';

    /** The report will contain ads that have been deleted. */
    const Deleted = 'Deleted';

    /** The report will contain ads that are pending editorial review. */
    const Pending = 'Pending';

    /** The report will contain ads that are active. */
    const Active = 'Active';
}

/**
 * Defines the campaign status values that you can use to filter the report data. These values are also used as column values in reports that include campaign status, such as the campaign performance report.
 * @link http://msdn.microsoft.com/en-us/library/bb672004(v=msads.80).aspx CampaignStatusReportFilter Value Set
 */
final class CampaignStatusReportFilter
{
    /** The same meaning as Active. This value is maintained for backward compatibility; however, you should use Active instead. */
    const Submitted = 'Submitted';

    /** The report will contain campaigns that have been canceled. */
    const Cancelled = 'Cancelled';

    /** The report will contain campaigns that have been deleted. */
    const Deleted = 'Deleted';

    /** The report will contain campaigns that are paused. */
    const Paused = 'Paused';

    /** The report will contain campaigns that are paused due to budget restrictions. */
    const BudgetPaused = 'BudgetPaused';

    /** The report will contain campaigns that are active. */
    const Active = 'Active';
}

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

/**
 * Defines the device type values that you can use to filter the report data. These values are also used as column values in reports that include device type information, such as the ad group performance report.
 * @link http://msdn.microsoft.com/en-us/library/gg262850(v=msads.80).aspx DeviceTypeReportFilter Value Set
 */
final class DeviceTypeReportFilter
{
    /** The report will include text ads displayed on computers. */
    const Computer = 'Computer';

    /** The report will include text ads displayed on smartphones (any high fidelity device capable of rendering full HTML). */
    const SmartPhone = 'SmartPhone';

    /** The report will include mobile ads displayed on a mobile device. */
    const NonSmartPhone = 'NonSmartPhone';

    /** The report will include text ads displayed on a tablet device. */
    const Tablet = 'Tablet';
}

/**
 * Defines the data columns that you can include in a campaign performance report.
 * @link http://msdn.microsoft.com/en-us/library/bb671614(v=msads.80).aspx CampaignPerformanceReportColumn Value Set
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

    /** The report will include a column that contains the currency used by the account that owns the campaign. For possible values, see the CurrencyType value set. */
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

    /** No longer supported. The following columns include the data that used to be reported in this column. */
    const ImpressionLostToRelevancePercent = 'ImpressionLostToRelevancePercent';

    /** No longer supported. */
    const ImpressionLostToOthersPercent = 'ImpressionLostToOthersPercent';

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

/**
 * Defines the data columns that you can include in an ad dynamic text performance report.
 * @link http://msdn.microsoft.com/en-us/library/bb671878(v=msads.80).aspx AdDynamicTextPerformanceReportColumn Value Set
 */
final class AdDynamicTextPerformanceReportColumn
{
    /** The report will include a column that contains the account name. */
    const AccountName = 'AccountName';

    /** The report will include a column that contains the account number. */
    const AccountNumber = 'AccountNumber';

    /** The report will include a column that contains the time period of each report row. */
    const TimePeriod = 'TimePeriod';

    /** Do not use this column; it is for backwards compatibility only. Instead, use the Language column. */
    const LanguageAndRegion = 'LanguageAndRegion';

    /** The report will include a column that contains the ad group name. */
    const AdGroupName = 'AdGroupName';

    /** The report will include a column that contains the ad group identifier. */
    const AdGroupId = 'AdGroupId';

    /** The report will include a column that contains the keyword that matched the user's search query. */
    const Keyword = 'Keyword';

    const AdId = 'AdId';

    /** The report will include a column that contains the ad title. */
    const AdTitle = 'AdTitle';

    /** The report will include a column that contains the ad type. For possible values, see the AdTypeReportFilter value set. */
    const AdType = 'AdType';

    /** The report will include a column that contains the destination URL. If the destination URL specified in the ad contains substitution parameters, the report will contain the URL after parameter substitution occurs. */
    const DestinationUrl = 'DestinationUrl';

    /** The report will include a column that contains the first dynamic substitution parameter. */
    const Param1 = 'Param1';

    /** The report will include a column that contains the second dynamic substitution parameter. */
    const Param2 = 'Param2';

    /** The report will include a column that contains the third dynamic substitution parameter. */
    const Param3 = 'Param3';

    /** The report will include a column that contains the currency used by the account to which the ad belongs. For possible values, see the CurrencyType value set. */
    const CurrencyCode = 'CurrencyCode';

    /** The report will include a column that contains the ad distribution medium. For possible values, see the AdDistributionReportFilter value set. */
    const AdDistribution = 'AdDistribution';

    /** The report will include a column that contains the number of times that the ad was displayed on the Bing Ads results page. */
    const Impressions = 'Impressions';

    /** The report will include a column that contains the number of times the ad was clicked. */
    const Clicks = 'Clicks';

    /** The report will include a column that contains the click-through rate. The formula for calculating the click-through rate is (clicks / impressions) * 100. */
    const Ctr = 'Ctr';

    /** The report will include a column that contains the average cost per click (CPC). The formula for calculating the average CPC is (cost of clicks / clicks). */
    const AverageCpc = 'AverageCpc';

    /** The report will include a column that contains the total spend on the ad for the time period. */
    const Spend = 'Spend';

    /** The report will include a column that contains the average position of the ad on the Bing Ads results page. */
    const AveragePosition = 'AveragePosition';

    /** The report will include a column that contains the number of conversions of the ad. */
    const Conversions = 'Conversions';

    /** The report will include a column that contains the conversion rate as a percentage. The formula for calculating the conversion rate is (conversions / clicks) * 100. */
    const ConversionRate = 'ConversionRate';

    /** The report will include a column that contains the cost per conversion. The formula for calculating the cost per conversion is (spend / conversions). */
    const CostPerConversion = 'CostPerConversion';

    /** The report will include a column that contains the average of the cost per thousand impressions (CPM) of the ad. */
    const AverageCpm = 'AverageCpm';

    /** The report will include a column that contains the pricing model of the ad group that owns the ad. Possible values include Cost per click and Cost per 1000 impressions. */
    const PricingModel = 'PricingModel';

    /** The report will include a column that contains the type of device on which the ad appeared. For a list of possible values, see DeviceTypeReportFilter. */
    const DeviceType = 'DeviceType';

    /** The report will include a column that contains the language used by the website that displayed the ad. */
    const Language = 'Language';
}

/**
 * Defines the data columns that you can include in an ad group performance report.
 * @link http://msdn.microsoft.com/en-us/library/bb671495(v=msads.80).aspx AdGroupPerformanceReportColumn Value Set
 */
final class AdGroupPerformanceReportColumn
{
    /** The report will include a column that contains the account name. */
    const AccountName = 'AccountName';

    /** The report will include a column that contains the account number. */
    const AccountNumber = 'AccountNumber';

    /** The report will include a column that contains the time period of each report row. */
    const TimePeriod = 'TimePeriod';

    /** Do not use this column; it is for backwards compatibility only. Instead, use the Language column. */
    const LanguageAndRegion = 'LanguageAndRegion';

    /** The report will include a column that contains the status of the ad group. For possible values, see the AdGroupStatusReportFilter value set. */
    const Status = 'Status';

    /** The report will include a column that contains the campaign name. */
    const CampaignName = 'CampaignName';

    /** The report will include a column that contains the campaign identifier. */
    const CampaignId = 'CampaignId';

    /** The report will include a column that contains the ad group name. */
    const AdGroupName = 'AdGroupName';

    /** The report will include a column that contains the ad group identifier. */
    const AdGroupId = 'AdGroupId';

    /** The report will include a column that contains the currency used by the account that owns the ad group. For possible values, see the CurrencyType value set. */
    const CurrencyCode = 'CurrencyCode';

    /** The report will include a column that contains the ad distribution medium. For possible values, see the AdDistributionReportFilter value set. */
    const AdDistribution = 'AdDistribution';

    /** The report will include a column that contains the number of times that ads in the ad group were displayed on the Bing Ads results page. */
    const Impressions = 'Impressions';

    /** The report will include a column that contains the number of times that the ads in the ad group were clicked. */
    const Clicks = 'Clicks';

    /** The report will include a column that contains the click-through rate. The formula for calculating the click-through rate is (clicks / impressions) * 100. */
    const Ctr = 'Ctr';

    /** The report will include a column that contains the average cost per click (CPC). The formula for calculating the average CPC is (cost of clicks / clicks). */
    const AverageCpc = 'AverageCpc';

    /** The report will include a column that contains the cost per click (Cpc) spend. */
    const Spend = 'Spend';

    /** The report will include a column that contains the average position of the ads in the ad group on the Bing Ads results page. */
    const AveragePosition = 'AveragePosition';

    /** The report will include a column that contains the number of conversions of all ads in the ad group. */
    const Conversions = 'Conversions';

    /** The report will include a column that contains the conversion rate as a percentage. The formula for calculating the conversion rate is (conversions / clicks) * 100. */
    const ConversionRate = 'ConversionRate';

    /** The report will include a column that contains the cost per conversion. The formula for calculating the cost per conversion is (spend / conversions). */
    const CostPerConversion = 'CostPerConversion';

    /** The report will include a column that contains the average of the cost per thousand impressions of the ads in the ad group. */
    const AverageCpm = 'AverageCpm';

    /** The report will include a column that contains the pricing model of the ad group that owns the ad. Possible values include Cost per click and Cost per 1000 impressions. */
    const PricingModel = 'PricingModel';

    /** The report will include a column that contains the type of device where ads in the ad group were displayed. For possible values, see the DeviceTypeReportFilter value set. */
    const DeviceType = 'DeviceType';

    /** The report will include a column that contains the language used by the website that displayed the ad. */
    const Language = 'Language';

    /** The report will include a column that contains the operating system of the device specified in the DeviceType column. If the operating system of the device cannot be determined or is not one of the operating systems that you can target, the value in this column will be Unknown. */
    const DeviceOS = 'DeviceOS';

    /** The report will include a column that contains the percentage of time your ads were displayed to users who searched by keywords that matched your keywords and targeting selections. */
    const ImpressionSharePercent = 'ImpressionSharePercent';

    /** The report will include a column that contains the percentage of time your ads would have been displayed to users but were not because of a budget shortfall. */
    const ImpressionLostToBudgetPercent = 'ImpressionLostToBudgetPercent';

    /** The report will include a column that contains the percentage of time your ads would have been displayed to users, but were not because your ad ranked too low in the auction. You can improve your competitive position by increasing your bid, improving your quality score, or both. */
    const ImpressionLostToRankPercent = 'ImpressionLostToRankPercent';

    /** No longer supported. The following columns include the data that used to be reported in this column. */
    const ImpressionLostToRelevancePercent = 'ImpressionLostToRelevancePercent';

    /** No longer supported. */
    const ImpressionLostToOthersPercent = 'ImpressionLostToOthersPercent';

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

    /** Reserved for internal use. */
    const BusinessListingId = 'BusinessListingId';

    /** Reserved for internal use. */
    const BusinessListingName = 'BusinessListingName';

    /** Reserved for internal use. */
    const BusinessCategoryId = 'BusinessCategoryId';

    /** Reserved for internal use. */
    const BusinessCategoryName = 'BusinessCategoryName';

    /** The report will include a column that contains the number of times your tracked number was shown on all devices. */
    const PhoneImpressions = 'PhoneImpressions';

    /** The report will include a column that contains the number of total calls to the tracked phone number that showed with your ad. The formula for calculating the PhoneCalls is ManualCalls + ClickCalls. */
    const PhoneCalls = 'PhoneCalls';

    /** The report will include a column that contains the number of calls dialed manually from any device to the tracked phone number. */
    const ManualCalls = 'ManualCalls';

    /** The report will include a column that contains the number of phone calls initiated by clicks. */
    const ClickCalls = 'ClickCalls';

    /** The report will include a column that contains the Ptr. */
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

/**
 * Defines the ad group status values that you can use to filter the report data. These values are also used as column values in reports that include ad group status, such as the ad group performance report.
 * @link http://msdn.microsoft.com/en-us/library/bb671991(v=msads.80).aspx AdGroupStatusReportFilter Value Set
 */
final class AdGroupStatusReportFilter
{
    /** The same meaning as Active. This value is maintained for backward-compatibility; however, you should use Active instead. */
    const Submitted = 'Submitted';

    /** The report will contain ad groups that have been deleted. */
    const Deleted = 'Deleted';

    /** The report will contain ad groups that have expired. */
    const Expired = 'Expired';

    /** The report will contain ad groups that are in a draft state. */
    const Draft = 'Draft';

    /** The report will contain ad groups that are paused. */
    const Paused = 'Paused';

    /** The report will contain ad groups that are active. */
    const Active = 'Active';
}

/**
 * Defines the data columns that you can include in an ad performance report.
 * @link http://msdn.microsoft.com/en-us/library/bb671923(v=msads.80).aspx AdPerformanceReportColumn Value Set
 */
final class AdPerformanceReportColumn
{
    /** The report will include a column that contains the account name. */
    const AccountName = 'AccountName';

    /** The report will include a column that contains the account number. */
    const AccountNumber = 'AccountNumber';

    /** The report will include a column that contains the specified time period of each report row. */
    const TimePeriod = 'TimePeriod';

    /** Do not use this column; it is for backwards compatibility only. Instead, use the Language column. */
    const LanguageAndRegion = 'LanguageAndRegion';

    /** The report will include a column that contains the campaign name. */
    const CampaignName = 'CampaignName';

    /** The report will include a column that contains the ad group name. */
    const AdGroupName = 'AdGroupName';

    /** The report will include a column that contains the ad identifier. */
    const AdId = 'AdId';

    /** The report will include a column that contains the ad group identifier. */
    const AdGroupId = 'AdGroupId';

    /** The report will include a column that contains the ad title. */
    const AdTitle = 'AdTitle';

    /** The report will include a column that contains the ad text. */
    const AdDescription = 'AdDescription';

    /** The report will include a column that contains the ad type. For possible values, see the AdTypeReportFilter value set. */
    const AdType = 'AdType';

    /** The report will include a column that contains the currency used by the account to which the ad belongs. For possible values, see the CurrencyType value set. */
    const CurrencyCode = 'CurrencyCode';

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

    /** The report will include a column that contains the number of conversions of the ad. */
    const Conversions = 'Conversions';

    /** The report will include a column that contains the conversion rate as a percentage. The formula for calculating the conversion rate is (conversions / clicks) * 100. */
    const ConversionRate = 'ConversionRate';

    /** The report will include a column that contains the cost per conversion. The formula for calculating the cost per conversion is (spend / conversions). */
    const CostPerConversion = 'CostPerConversion';

    /** The report will include a column that contains the average cost per thousand impressions of the ad. */
    const AverageCpm = 'AverageCpm';

    /** The report will include a column that contains the pricing model of the ad group that owns the ad. Possible values include Cost per click and Cost per 1000 impressions. */
    const PricingModel = 'PricingModel';

    /** The report will include a column that contains the destination URL. If the URL contains substitution parameters, the URL in the report will include the substitution parameters and not the resolved values. */
    const DestinationUrl = 'DestinationUrl';

    /** The report will include a column that contains the type of device on which the ad appeared. For a list of possible values, see DeviceTypeReportFilter. */
    const DeviceType = 'DeviceType';

    /** The report will include a column that contains the language used by the website that displayed the ad. */
    const Language = 'Language';

    /** The report will include a column that contains the display URL that appeared in the ad. */
    const DisplayUrl = 'DisplayUrl';

    /** Reserved for internal use. */
    const BusinessListingId = 'BusinessListingId';

    /** Reserved for internal use. */
    const BusinessListingName = 'BusinessListingName';

    /** Reserved for internal use. */
    const BusinessCategoryId = 'BusinessCategoryId';

    /** Reserved for internal use. */
    const BusinessCategoryName = 'BusinessCategoryName';

    /** The report will include a column that contains the network of the ad group that owns the ad. For possible values, see the Network value set. */
    const Network = 'Network';

    /** The report will include a column that indicates whether the ad impression appeared in a top position or elsewhere. The following is a list of possible values. */
    const TopVsOther = 'TopVsOther';
}

/**
 * Defines the data columns that you can include in a rich ad component performance report.
 * @link http://msdn.microsoft.com/en-us/library/hh180149(v=msads.80).aspx RichAdComponentPerformanceReportColumn Value Set
 */
final class RichAdComponentPerformanceReportColumn
{
    /** The report will include a column that contains the account name. */
    const AccountName = 'AccountName';

    /** The report will include a column that contains the account number. */
    const AccountNumber = 'AccountNumber';

    /** The report will include a column that contains the time period of each report row. */
    const TimePeriod = 'TimePeriod';

    /** The report will include a column that contains the ad identifier. */
    const AdId = 'AdId';

    /** The report will include a column that contains the ad title. */
    const AdTitle = 'AdTitle';

    /** The report will include a column that contains the campaign name. */
    const CampaignName = 'CampaignName';

    /** The report will include a column that contains the ad group name. */
    const AdGroupName = 'AdGroupName';

    /** The report will include a column that contains the ad group identifier. */
    const AdGroupId = 'AdGroupId';

    /** The report will include a column that contains the rich ad type. The type determines the type of components that the ad contains. For possible values, see RichAdSubTypeFilter. */
    const RichAdSubType = 'RichAdSubType';

    /** The report will include a column that contains the component of the rich ad that was clicked. For possible values, see ComponentTypeFilter. */
    const ComponentType = 'ComponentType';

    /** The report will include a column that contains the title of the component. The ComponentType column identifies the component. */
    const ComponentTitle = 'ComponentTitle';

    /** The report will include a column that contains the destination URL as input. */
    const ComponentDestinationURL = 'ComponentDestinationURL';

    /** This column is no longer supported. Do not include it in your report. */
    const ComponentPosition = 'ComponentPosition';

    /** The report will include a column that contains the number of billable clicks of a rich ad. The count includes the first click of a component of the ad and subsequent clicks on the impression if the user waits a short, system-defined interval between clicks. If a subsequent click occurs within the interval, the click may be included in the ComponentNonBillableClicks column (see ComponentNonBillableClicks for more information). */
    const ComponentClicks = 'ComponentClicks';

    /** The report will include a column that contains the number of clicks that occur on different components of the ad after the first click but within the short, system-defined interval. Successive clicks on the same component within the system-defined interval are not counted. */
    const ComponentNonBillableClicks = 'ComponentNonBillableClicks';

    /** The report will include a column that contains the number of times that all components of the ad were clicked. This is the sum of the ComponentClicks and ComponentNonBillableClicks columns. */
    const ComponentTotalClicks = 'ComponentTotalClicks';

    /** The report will include a column that contains the click-through rate of all components of the ad that were clicked. */
    const ComponentCTR = 'ComponentCTR';
}

/**
 * Defines the possible components of a rich ad that you can use to filter the report data. The values are also used as the data values for the ComponentType column in the rich ad component performance report.
 * @link http://msdn.microsoft.com/en-us/library/hh180146(v=msads.80).aspx ComponentTypeFilter Value Set
 */
final class ComponentTypeFilter
{
    /** The title of the ad that contains a hyperlink to a destination URL. */
    const Basic = 'Basic';

    /** A hyperlink to a webpage inside the destination website. */
    const Deeplink = 'Deeplink';

    /** An entry form on the ad that gathers data from the user. Clicking the button on the form counts as a click. */
    const Form = 'Form';

    /** An image in the ad that contains a hyperlink to a destination URL. */
    const Image = 'Image';

    /** The icon that displays next to the display URL. */
    const FavoriteIcon = 'FavoriteIcon';

    /** A video embedded in the ad that the user can click to play. */
    const Video = 'Video';

    /** A link in a pharmaceutical ad that links to additional drug information. */
    const TitledLink = 'TitledLink';
}

/**
 * Defines the rich ad types that you can use to filter the report data. The values are also used as the data values for the RichAdSubType column in the rich ad component performance report.
 * @link http://msdn.microsoft.com/en-us/library/hh180148(v=msads.80).aspx RichAdSubTypeFilter Value Set
 */
final class RichAdSubTypeFilter
{
    /** An ad that can contain a maximum of two images and four deep links. */
    const Rais2Images4Links = 'Rais2Images4Links';

    /** An ad that can contain a maximum of two images, two deep links, and an input form. */
    const Rais2Images2Links1Form = 'Rais2Images2Links1Form';

    /** A pharmaceutical ad. */
    const RaisPharma = 'RaisPharma';

    /** An ad that can contain one video and a maximum of four deep links. */
    const Rais1Video4Links = 'Rais1Video4Links';

    /** An ad that can contain one video, a maximum of two deep links, and an input form. */
    const Rais1Video2Links1Form = 'Rais1Video2Links1Form';
}

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

/**
 * Defines the bid match type values that you can use to filter the report data. These values are also used as column values in reports that include bid match type, such as the keyword performance report.
 * @link http://msdn.microsoft.com/en-us/library/ff728812(v=msads.80).aspx BidMatchTypeReportFilter Value Set
 */
final class BidMatchTypeReportFilter
{
    /** The report will contain keywords that set a bid value for the exact match type (see the ExactMatchBid element of the Keyword data object). */
    const Exact = 'Exact';

    /** The report will contain keywords that set a bid value for the phrase match type (see the PhraseMatchBid element of the Keyword data object). */
    const Phrase = 'Phrase';

    /** The report will contain keywords that set a bid value for the broad match type (see the BroadMatchBid element of the Keyword data object). */
    const Broad = 'Broad';

    /** The report will contain keywords that set a bid value for the content match type (see the ContentMatchBid element of the Keyword data object). */
    const Content = 'Content';
}

/**
 * The cashback rebate program is no longer supported.
 * @link http://msdn.microsoft.com/en-us/library/ee703959(v=msads.80).aspx CashbackReportFilter Value Set
 */
final class CashbackReportFilter
{
    const NotEnabled = 'NotEnabled';
    const Enabled = 'Enabled';
}

/**
 * Defines the data columns that you can include in a destination URL performance report.
 * @link http://msdn.microsoft.com/en-us/library/bb671820(v=msads.80).aspx DestinationUrlPerformanceReportColumn Value Set
 */
final class DestinationUrlPerformanceReportColumn
{
    /** The report will include a column that contains the account name. */
    const AccountName = 'AccountName';

    /** The report will include a column that contains the account number. */
    const AccountNumber = 'AccountNumber';

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

    /** The report will include a column that contains the ad identifier. */
    const AdId = 'AdId';

    /** The report will include a column that contains the currency used by the account to which the ad belongs. For possible values, see the CurrencyType value set. */
    const CurrencyCode = 'CurrencyCode';

    /** The report will include a column that contains the ad distribution medium. For possible values, see the AdDistributionReportFilter value set. */
    const AdDistribution = 'AdDistribution';

    /** The report will include a column that contains the destination URL. If the destination URL specified in the ad contains substitution parameter strings (for example, {param1}), the URL in the report will contain the parameter strings and not the substitution values. */
    const DestinationUrl = 'DestinationUrl';

    /** The report will include a column that contains the number of times that the ad was displayed on the Bing Ads results page. */
    const Impressions = 'Impressions';

    /** The report will include a column that contains the number of times that an ad with the destination URL was clicked. */
    const Clicks = 'Clicks';

    /** The report will include a column that contains the click-through rate. The formula for calculating the click-through rate is (clicks / impressions) * 100. */
    const Ctr = 'Ctr';

    /** The report will include a column that contains the average cost per click (CPC). The formula for calculating the average CPC is (cost of clicks / clicks). */
    const AverageCpc = 'AverageCpc';

    /** The report will include a column that contains the total spend on the ad for the specified time period. */
    const Spend = 'Spend';

    /** The report will include a column that contains the average position of the ad on the Bing Ads results page. */
    const AveragePosition = 'AveragePosition';

    /** The report will include a column that contains the number of conversions of the ad. */
    const Conversions = 'Conversions';

    /** The report will include a column that contains the conversion rate as a percentage. The formula for calculating the conversion rate is (conversions / clicks) * 100. */
    const ConversionRate = 'ConversionRate';

    /** The report will include a column that contains the cost per conversion. The formula for calculating the cost per conversion is (ads / conversions). */
    const CostPerConversion = 'CostPerConversion';

    /** The report will include a column that contains the average of the cost per thousand impressions (CPM) of the ad. */
    const AverageCpm = 'AverageCpm';

    /** The report will include a column that contains the pricing model of the ad group that owns the ad. Possible values include Cost per click and Cost per 1000 impressions. */
    const PricingModel = 'PricingModel';

    /** The report will include a column that contains the type of device on which the ad appeared. For a list of possible values, see DeviceTypeReportFilter. */
    const DeviceType = 'DeviceType';

    /** The report will include a column that contains the language used by the website that displayed the ad. */
    const Language = 'Language';
}

/**
 * Defines the data columns that you can include in an age and gender demographic report.
 * @link http://msdn.microsoft.com/en-us/library/bb671786(v=msads.80).aspx AgeGenderDemographicReportColumn Value Set
 */
final class AgeGenderDemographicReportColumn
{
    /** The report will include a column that contains the account name. */
    const AccountName = 'AccountName';

    /** The report will include a column that contains the account number. */
    const AccountNumber = 'AccountNumber';

    /** The report will include a column that contains the time period of each report row. */
    const TimePeriod = 'TimePeriod';

    /** Do not use this column; it is for backwards compatibility only. Instead, use the Language column. */
    const LanguageAndRegion = 'LanguageAndRegion';

    /** The report will include a column that contains the campaign name. */
    const CampaignName = 'CampaignName';

    /** The report will include a column that contains the ad group name. */
    const AdGroupName = 'AdGroupName';

    /** The report will include a column that contains the ad distribution medium. For possible values, see the AdDistributionReportFilter value set. */
    const AdDistribution = 'AdDistribution';

    /** The report will include a column that contains the age group of users that could click the ad. For possible values, see the AgeGroupReportFilter value set. */
    const AgeGroup = 'AgeGroup';

    /** The report will include a column that contains the gender of users that could click the ad. For possible values, see the GenderReportFilter value set. */
    const Gender = 'Gender';

    /** The report will include a column that contains the estimated number of times that an ad could be served to a particular age group or gender. */
    const EstimatedImpressionPercent = 'EstimatedImpressionPercent';

    /** The report will include a column that contains the estimated number of times that an ad will be clicked by a particular age group or gender. */
    const EstimatedClickPercent = 'EstimatedClickPercent';

    /** The report will include a column that contains the estimated click-through rate as a percentage. The formula for calculating the estimated click-through rate is (estimated clicks / estimated impressions) * 100. */
    const EstimatedCtr = 'EstimatedCtr';

    /** The report will include a column that contains the language used by the website that displayed the ad. */
    const Language = 'Language';
}

/**
 * Defines the data columns that you can include in a metropolitan-area demographic report.
 * @link http://msdn.microsoft.com/en-us/library/bb671748(v=msads.80).aspx MetroAreaDemographicReportColumn Value Set
 */
final class MetroAreaDemographicReportColumn
{
    /** The report will include a column that contains the account name. */
    const AccountName = 'AccountName';

    /** The report will include a column that contains the account number. */
    const AccountNumber = 'AccountNumber';

    /** The report will include a column that contains the time period of each report row. */
    const TimePeriod = 'TimePeriod';

    /** Do not use this column; it is for backwards compatibility only. Instead, use the Language column. */
    const LanguageAndRegion = 'LanguageAndRegion';

    /** The report will include a column that contains the campaign name. */
    const CampaignName = 'CampaignName';

    /** The report will include a column that contains the name of the ad group. */
    const AdGroupName = 'AdGroupName';

    /** The report will include a column that contains the country where the user that clicked the ad is located. */
    const Country = 'Country';

    /** The report will include a column that contains the state where the user who clicked the ad is located. */
    const State = 'State';

    /** The report will include a column that contains the metropolitan area where the user who clicked the ad is located. */
    const MetroArea = 'MetroArea';

    /** The report will include a column that contains the currency used by the account to which the ad belongs. For possible values, see the CurrencyType value set. */
    const CurrencyCode = 'CurrencyCode';

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

    /** The report will include a column that contains the average of the cost per thousand impressions (CPM) of the ad. */
    const AverageCpm = 'AverageCpm';

    /** The report will include a column that contains the address of the business if the ad group or campaign specifies business location targeting or the address or name of a landmark if radius targeting is specified. */
    const ProximityTargetLocation = 'ProximityTargetLocation';

    /** The report will include a column that contains the radius, in miles, of the target area surrounding the business or landmark specified in the ProximityTargetLocation column. */
    const Radius = 'Radius';

    /** The report will include a column that contains the language used by the website that displayed the ad. */
    const Language = 'Language';

    /** Not supported. The report will include a column that contains the city where the user who clicked the ad is located. */
    const City = 'City';

    /** The report will include a column that contains the name of a country if the user's geographical intent can be determined. The country is set if the user's intent is a country or sub geography of the country. */
    const QueryIntentCountry = 'QueryIntentCountry';

    /** The report will include a column that contains the name of a state if the user's geographical intent can be determined. The state is set if the user's intent is a state or sub geography of the state. */
    const QueryIntentState = 'QueryIntentState';

    /** Not supported. The report will include a column that contains the name of a city if the user's geographical intent can be determined. The city is set if the user's intent is a city. For example, the user's search query was rental cars in Portland. */
    const QueryIntentCity = 'QueryIntentCity';

    /** The report will include a column that contains the name of a metro area if the user's geographical intent can be determined. The metro area is set if the user's intent is a metro area or city within the metro area. */
    const QueryIntentDMA = 'QueryIntentDMA';
}

/**
 * Defines the data columns that you can include in a publisher usage performance report.
 * @link http://msdn.microsoft.com/en-us/library/dd797159(v=msads.80).aspx PublisherUsagePerformanceReportColumn Value Set
 */
final class PublisherUsagePerformanceReportColumn
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

    /** The report will include a column that contains the currency used by the account to which the ad belongs. For possible values, see the CurrencyType value set. */
    const CurrencyCode = 'CurrencyCode';

    /** The report will include a column that contains the ad distribution medium. For possible values, see the AdDistributionReportFilter value set. */
    const AdDistribution = 'AdDistribution';

    /** The report will include a column that contains the URL of the website that displayed the ad. */
    const PublisherUrl = 'PublisherUrl';

    /** The report will include a column that contains the number of impressions. */
    const Impressions = 'Impressions';

    /** The report will include a column that contains the number of times the ad was clicked. */
    const Clicks = 'Clicks';

    /** The report will include a column that contains the click-through rate. The formula for calculating the click-through rate is (clicks / impressions) * 100. */
    const Ctr = 'Ctr';

    /** The report will include a column that contains the average cost per click (CPC). The formula for calculating the average CPC is (cost of clicks / clicks). */
    const AverageCpc = 'AverageCpc';

    /** The report will include a column that contains the total spend on the ad for the time period. */
    const Spend = 'Spend';

    /** The report will include a column that contains the average position of the ad on the Bing Ads results page. */
    const AveragePosition = 'AveragePosition';

    /** The report will include a column that contains the number of conversions of the ad. */
    const Conversions = 'Conversions';

    /** The report will include a column that contains the conversion rate as a percentage. The formula for calculating the conversion rate is (conversions / clicks) * 100. */
    const ConversionRate = 'ConversionRate';

    /** The report will include a column that contains the cost per conversion. The formula for calculating the cost per conversion is (spend / conversions). */
    const CostPerConversion = 'CostPerConversion';

    /** The report will contain a column that contains the average of the cost per thousand impressions (CPM) of the ad. */
    const AverageCpm = 'AverageCpm';

    /** The report will include a column that contains the pricing model of the ad group that owns the ad. Possible values include Cost per click and Cost per 1000 impressions. */
    const PricingModel = 'PricingModel';

    /** The report will include a column that contains the language used by the website that displayed the ad. */
    const Language = 'Language';
}

/**
 * Defines the data columns that you can include in a website performance report.
 * @link http://msdn.microsoft.com/en-us/library/dd797115(v=msads.80).aspx SitePerformanceReportColumn Value Set
 */
final class SitePerformanceReportColumn
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

    /** The report will include a column that contains the website URL that displayed the ad. */
    const Site = 'Site';

    /** The report will include a column that contains the identifier of the website placement object. */
    const SiteId = 'SiteId';

    /** The ad identifier. */
    const AdId = 'AdId';

    /** The report will include a column that contains the destination URL. If the destination URL specified in the ad contains substitution parameters, the destination URL in the report is the URL after parameter substitution occurs. */
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

    /** The report will include a column that contains the number of conversions of the ad. */
    const Conversions = 'Conversions';

    /** The report will include a column that contains the conversion rate as a percentage. The formula for calculating the conversion rate is (conversions / clicks) * 100. */
    const ConversionRate = 'ConversionRate';

    /** The report will include a column that contains the cost per conversion. The formula for calculating the cost per conversion is (spend / conversions). */
    const CostPerConversion = 'CostPerConversion';

    /** The report will include a column that contains the ad type. For possible values, see the AdTypeReportFilter value set. */
    const AdType = 'AdType';

    /** The report will include a column that contains the average of the cost per thousand impressions (CPM) of the ad. */
    const AverageCpm = 'AverageCpm';

    /** The report will include a column that contains the pricing model of the ad group that owns the ad. Possible values include Cost per click and Cost per 1000 impressions. */
    const PricingModel = 'PricingModel';

    /** The report will include a column that contains the type of device on which the ad appeared. For a list of possible values, see DeviceTypeReportFilter. */
    const DeviceType = 'DeviceType';

    /** The report will include a column that contains the language used by the website that displayed the ad. */
    const Language = 'Language';
}

/**
 * Defines the data columns that you can include in a behavioral segment target report.
 * @link http://msdn.microsoft.com/en-us/library/dd796970(v=msads.80).aspx BehavioralTargetReportColumn Value Set
 */
final class BehavioralTargetReportColumn
{
    /** The report will include a column that contains the account name. */
    const AccountName = 'AccountName';

    /** The report will include a column that contains the account number. */
    const AccountNumber = 'AccountNumber';

    /** The report will include a column that contains the account identifier. */
    const AccountId = 'AccountId';

    /** The report will include a column that contains the time period of each report row. */
    const TimePeriod = 'TimePeriod';

    /** The report will include a column that contains the currency code. */
    const CurrencyCode = 'CurrencyCode';

    /** The report will include a column that contains the campaign identifier. */
    const CampaignId = 'CampaignId';

    /** The report will include a column that contains the campaign name. */
    const CampaignName = 'CampaignName';

    /** The report will include a column that contains the Bing Ads website that displayed the ad. */
    const LanguageAndRegion = 'LanguageAndRegion';

    /** The report will include a column that contains the behavioral segment identifier. */
    const BehavioralId = 'BehavioralId';

    /** The report will include a column that contains the ad group identifier. */
    const AdGroupId = 'AdGroupId';

    /** The report will include a column that contains the ad group name. */
    const AdGroupName = 'AdGroupName';

    /** The report will include a column that contains the ad distribution medium. */
    const AdDistribution = 'AdDistribution';

    /** The report will include a column that contains the number of impressions. */
    const Impressions = 'Impressions';

    /** The report will include a column that contains the number of times that the ad was clicked. */
    const Clicks = 'Clicks';

    /** The report will include a column that contains the click-through rate. The click-through rate (CTR) is the ratio of the number of times that an ad is clicked to the number of ad impressions. */
    const Ctr = 'Ctr';

    /** The report will include a column that contains the average cost per click (CPC). */
    const AverageCpc = 'AverageCpc';

    /** The report will include a column that contains the total amount spent for the time period. */
    const Spend = 'Spend';

    /** The report will include a column that contains the average position of the ad in paid results. */
    const AveragePosition = 'AveragePosition';

    /** The report will include a column that contains the cost per thousand impressions (CPM). */
    const AverageCpm = 'AverageCpm';

    /** The report will include a column that contains the pricing model of the ad group that owns the ad. Possible values include Cost per click and Cost per 1000 impressions. */
    const PricingModel = 'PricingModel';
}

/**
 * Defines the data columns that you can include in a conversion performance report.
 * @link http://msdn.microsoft.com/en-us/library/gg262852(v=msads.80).aspx ConversionPerformanceReportColumn Value Set
 */
final class ConversionPerformanceReportColumn
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

    /** The report will include a column that contains the number of times that the ad was displayed on the Bing Ads results page. */
    const Impressions = 'Impressions';

    /** The report will include a column that contains the number of times that the ad was clicked. */
    const Clicks = 'Clicks';

    /** The report will include a column that contains the click-through rate. The formula for calculating the click-through rate is (clicks / impressions) * 100. */
    const Ctr = 'Ctr';

    /** The report will include a column that contains the number of times an entity (for example, an account, campaign, or ad group) contributed to the conversion on another entity. */
    const Assists = 'Assists';

    /** The report will include a column that contains the number of conversions. */
    const Conversions = 'Conversions';

    /** The report will include a column that contains the conversion rate as a percentage. The formula for calculating the conversion rate is (conversions / clicks) * 100. */
    const ConversionRate = 'ConversionRate';

    /** The report will include a column that contains the total spend on the ads for the specified time period. */
    const Spend = 'Spend';

    /** The report will include a column that contains the non-advertising cost (for example, tax and shipping) reported by the advertiser for conversion. */
    const ExtendedCost = 'ExtendedCost';

    /** The report will include a column that contains the revenue reported by the advertiser from conversions. */
    const Revenue = 'Revenue';

    /** The report will include a column that contains the return on ad spend (ROAS). The formula for calculating the ROAS is (revenue / spend). */
    const ReturnOnAdSpend = 'ReturnOnAdSpend';

    /** The report will include a column that contains the cost per conversion. The formula for calculating the cost per conversion is (spend / conversions). */
    const CostPerConversion = 'CostPerConversion';

    /** The report will include a column that contains the cost per assist. The formula for calculating the cost per assist is (spend / assists). */
    const CostPerAssist = 'CostPerAssist';

    /** The report will include a column that contains the revenue per conversion. The formula for calculating the revenue per conversion is (revenue / conversions). */
    const RevenuePerConversion = 'RevenuePerConversion';

    /** The report will include a column that contains the revenue per assist. The formula for calculating the revenue per assist is (revenue / assists). */
    const RevenuePerAssist = 'RevenuePerAssist';

    /** The report will include a column that contains the type of device on which the ad appeared. For a list of possible values, see DeviceTypeReportFilter. */
    const DeviceType = 'DeviceType';
}

/**
 * Defines the data columns that you can include in a goals and funnels report.
 * @link http://msdn.microsoft.com/en-us/library/gg262845(v=msads.80).aspx GoalsAndFunnelsReportColumn Value Set
 */
final class GoalsAndFunnelsReportColumn
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

    /** The report will include a column that contains the number of times that another ad contributed to the conversion of this ad. */
    const Assists = 'Assists';

    /** The report will include a column that contains the funnel conversion rate. The formula for calculating the conversion rate is (conversions / number of times a user entered step 1 of the funnel) * 100. */
    const FunnelConversionRate = 'FunnelConversionRate';

    /** The report will include a column that contains the total spend on ads in the ad group for the time period. */
    const Spend = 'Spend';

    /** The report will include a column that contains the revenue reported by the advertiser from conversions. */
    const Revenue = 'Revenue';

    /** The report will include a column that contains the return on ad spend (ROAS). The formula for calculating the ROAS is (revenue that the ad generates / spend). */
    const ReturnOnAdSpend = 'ReturnOnAdSpend';

    /** The report will include a column that contains the non-advertising cost (for example, tax and shipping) reported by the advertiser for conversion. */
    const ExtendedCost = 'ExtendedCost';
}

/**
 * Defines the data columns that you can include in a traffic sources report.
 * @link http://msdn.microsoft.com/en-us/library/gg262847(v=msads.80).aspx TrafficSourcesReportColumn Value Set
 */
final class TrafficSourcesReportColumn
{
    /** The report will include a column that contains the account name. */
    const AccountName = 'AccountName';

    /** The report will include a column that contains the account number. */
    const AccountNumber = 'AccountNumber';

    /** The report will include a column that contains the account identifier. */
    const AccountId = 'AccountId';

    /** The report will include a column that contains the time period of each report row. */
    const TimePeriod = 'TimePeriod';

    /** The report will include a column that contains the network that generated the traffic. If the user is coming from an owned and operated search website, the value will be Bing Ads and Yahoo! Search Property only. If the user is coming from a syndicated search website, the value will be the domain name of the syndicated website. */
    const Source = 'Source';

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

    /** The report will include a column that contains the number of times a user entered step 5 of the funnel. */
    const Step5Count = 'Step5Count';

    /** The report will include a column that contains the number of conversions for the goal. */
    const Conversions = 'Conversions';

    /** The report will include a column that contains the number of times that an entity (for example, an account, campaign, or ad group) contributed to the conversion of another entity. */
    const Assists = 'Assists';

    /** The report will include a column that contains the funnel conversion rate. The formula for calculating the conversion rate is (conversions / number of times that the user entered step 1 of the funnel) * 100. */
    const FunnelConversionRate = 'FunnelConversionRate';

    /** The report will include a column that contains the revenue reported by the advertiser from conversions. */
    const Revenue = 'Revenue';

    /** The report will include a column that contains the revenue per conversion rate. The formula for calculating the revenue per conversion is (revenue / conversions). */
    const RevenuePerConversion = 'RevenuePerConversion';
}

/**
 * Defines the data columns that you can include in a negative-keyword conflict report.
 * @link http://msdn.microsoft.com/en-us/library/hh560535(v=msads.80).aspx NegativeKeywordConflictReportColumn Value Set
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

/**
 * Defines the types of changes to entities by which you can filter the report data. These values are also used as column values in the HowChanged column of the campaign change history report.
 * @link http://msdn.microsoft.com/en-us/library/hh912354(v=msads.80).aspx ChangeTypeReportFilter Value Set
 */
final class ChangeTypeReportFilter
{
    /** The report will include data for entities that have been added. */
    const Added = 'Added';

    /** The report will include data for entities that have been deleted. */
    const Deleted = 'Deleted';

    /** The report will include data for elements of entities whose values have been updated. */
    const Changed = 'Changed';
}

/**
 * Defines the types of entities by which you can filter the report data. These values are also used as column values in the ItemChanged column of the campaign change history report.
 * @link http://msdn.microsoft.com/en-us/library/hh912355(v=msads.80).aspx ChangeEntityReportFilter Value Set
 */
final class ChangeEntityReportFilter
{
    /** The report will include data for accounts that have been added or deleted, or that have had account elements updated. */
    const Account = 'Account';

    /** The report will include data for campaigns that have been added or deleted, or that have had campaign elements updated. */
    const Campaign = 'Campaign';

    /** The report will include data for ad groups that have been added or deleted, or that have had ad group elements updated. */
    const AdGroup = 'AdGroup';

    /** The report will include data for ads that have been added or deleted, or that have had ad elements updated. */
    const Ad = 'Ad';

    /** The report will include data for keywords that have been added or deleted, or that have had keyword elements updated. */
    const Keyword = 'Keyword';
}

/**
 * Defines the data columns that you can include in an ad extension by ad report.
 * @link http://msdn.microsoft.com/en-us/library/jj713608(v=msads.80).aspx AdExtensionByAdsReportColumn Value Set
 */
final class AdExtensionByAdsReportColumn
{
    /** The report will include a column that contains the account name. */
    const AccountName = 'AccountName';

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

    /** The report will include a column that contains the title of the ad. */
    const AdTitle = 'AdTitle';

    /** The report will include a column that contains the ad identifier. */
    const AdId = 'AdId';

    /** The report will include a column that contains the type of the ad extension that the user clicked. For example, the column will contain Site Links if the user clicked a site link in the ad. */
    const AdExtensionType = 'AdExtensionType';

    /** The report will include a column that contains the type of device on which the ad was displayed. For possible values, see the DeviceTypeReportFilter value set. */
    const DeviceType = 'DeviceType';

    /** The report will include a column that contains the operating system of the device specified in the DeviceType column. If the operating system of the device cannot be determined or is not one of the operating systems that you can target, the value in this column will be Unknown. */
    const DeviceOS = 'DeviceOS';

    /** The report will include a column that contains the ad extension item that the user clicked. For example, the column will contain Driving direction if the user clicked a location ad extension's address. Possible values include Ad title (headline), Phone call, Driving direction, Sitelink, and Business image. */
    const ClickType = 'ClickType';

    /** The report will include a column that contains the number of times that the ad was displayed in the search results with the ad extension. */
    const Impressions = 'Impressions';

    /** The report will include a column that contains the number of billable times that the ad extension was clicked. */
    const Clicks = 'Clicks';

    /** The report will include a column that contains the number of billable and non-billable times that the ad extension was clicked. */
    const TotalClicks = 'TotalClicks';

    /** The report will include a column that contains the number of times that clicking the ad extension resulted in a conversion. */
    const Conversions = 'Conversions';

    /** The report will include a column that contains the click-through rate. The formula for calculating the click-through rate is (clicks / impressions) * 100. */
    const Ctr = 'Ctr';

    /** The report will include a column that contains the average cost per click (CPC). The formula for calculating the average CPC is (cost of clicks / clicks). */
    const AverageCpc = 'AverageCpc';

    /** The report will include a column that contains the conversion rate as a percentage. The formula for calculating the conversion rate is (conversions / clicks) * 100. */
    const ConversionRate = 'ConversionRate';

    /** The report will include a column that contains the amount spent on the ad as a result of the ad extension being clicked. The amount spent is for the specified time period. */
    const Spend = 'Spend';

    /** The report will include a column that contains the ad extension identifier. */
    const AdExtensionId = 'AdExtensionId';

    /** The report will include a column that contains the version of the ad extension. */
    const AdExtensionVersion = 'AdExtensionVersion';

    /** The report will include a column that contains the account number. */
    const AccountNumber = 'AccountNumber';

    /** The report will include a column that contains the account identifier. */
    const AccountId = 'AccountId';
}

/**
 * Defines the data columns that you can include in an ad extension by keyword report.
 * @link http://msdn.microsoft.com/en-us/library/jj713610(v=msads.80).aspx AdExtensionByKeywordReportColumn Value Set
 */
final class AdExtensionByKeywordReportColumn
{
    /** The report will include a column that contains the account name. */
    const AccountName = 'AccountName';

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

    /** The report will include a column that contains the keyword. */
    const Keyword = 'Keyword';

    /** The report will include a column that contains the keyword identifier. */
    const KeywordId = 'KeywordId';

    /** The report will include a column that contains the type of the ad extension that the user clicked. For example, the column will contain Site Links if the user clicked a site link in the ad. */
    const AdExtensionType = 'AdExtensionType';

    /** The report will include a column that contains the type of device on which the ad was displayed. For possible values, see the DeviceTypeReportFilter value set. */
    const DeviceType = 'DeviceType';

    /** The report will include a column that contains the operating system of the device specified in the DeviceType column. If the operating system of the device cannot be determined or is not one of the operating systems that you can target, the value in this column will be Unknown. */
    const DeviceOS = 'DeviceOS';

    /** The report will include a column that contains the ad extension item that the user clicked. For example, the column will contain Driving direction if the user clicked a location ad extension's address. Possible values include Ad title (headline), Phone call, Driving direction, Sitelink, and Business image. */
    const ClickType = 'ClickType';

    /** The report will include a column that contains the number of times that ad was displayed in the search results with the ad extension. */
    const Impressions = 'Impressions';

    /** The report will include a column that contains the number of billable times that the ad extension was clicked. */
    const Clicks = 'Clicks';

    /** The report will include a column that contains the number of billable and non-billable times that the ad extension was clicked. */
    const TotalClicks = 'TotalClicks';

    /** The report will include a column that contains the number of times that clicking the ad extension resulted in a conversion. */
    const Conversions = 'Conversions';

    /** The report will include a column that contains the click-through rate. The formula for calculating the click-through rate is (clicks / impressions) * 100. */
    const Ctr = 'Ctr';

    /** The report will include a column that contains the average cost per click (CPC). The formula for calculating the average CPC is (cost of clicks / clicks). */
    const AverageCpc = 'AverageCpc';

    /** The report will include a column that contains the conversion rate as a percentage. The formula for calculating the conversion rate is (conversions / clicks) * 100. */
    const ConversionRate = 'ConversionRate';

    /** The report will include a column that contains the amount spent on the ad as a result of the ad extension being clicked. The amount spent is for the specified time period. */
    const Spend = 'Spend';

    /** The report will include a column that contains the ad extension identifier. */
    const AdExtensionId = 'AdExtensionId';

    /** The report will include a column that contains the version of the ad extension. */
    const AdExtensionVersion = 'AdExtensionVersion';

    /** The report will include a column that contains the account number. */
    const AccountNumber = 'AccountNumber';

    /** The report will include a column that contains the account identifier. */
    const AccountId = 'AccountId';
}

/**
 * Defines the data columns that you can include in an ad extension dimension report.
 * @link http://msdn.microsoft.com/en-us/library/jj713609(v=msads.80).aspx AdExtensionDimensionReportColumn Value Set
 */
final class AdExtensionDimensionReportColumn
{
    /** The report will include a column that contains the account identifier. */
    const AccountId = 'AccountId';

    /** The report will include a column that contains the type of the ad extension. */
    const AdExtensionType = 'AdExtensionType';

    /** The report will include a column that contains the ad extension identifier. */
    const AdExtensionId = 'AdExtensionId';

    /** The report will include a column that contains the version of the ad extension. */
    const AdExtensionVersion = 'AdExtensionVersion';

    /** The report will include a column that contains the status of the ad extension. */
    const Status = 'Status';

    /** The report will include a column that identifies the ad extension property. The AdExtensionPropertyValue column contains the value of the property. The following are the possible property ID values. */
    const AdExtensionPropertyId = 'AdExtensionPropertyId';

    /** The report will include a column that contains the property value of the property identified by the AdExtensionPropertyId column. */
    const AdExtensionPropertyValue = 'AdExtensionPropertyValue';
}

/**
 * Defines the data columns that you can include in a share of voice report.
 * @link http://msdn.microsoft.com/en-us/library/jj592910(v=msads.80).aspx ShareOfVoiceReportColumn Value Set
 */
final class ShareOfVoiceReportColumn
{
    /** The report will include a column that contains the account name. */
    const AccountName = 'AccountName';

    /** The report will include a column that contains the time period of each report row. */
    const TimePeriod = 'TimePeriod';

    const ProductName = 'ProductName';

    /** The report will include a column that contains the campaign name. */
    const CampaignName = 'CampaignName';

    /** The report will include a column that contains the ad group name. */
    const AdGroupName = 'AdGroupName';

    /** Do not use this column; it is for backwards compatibility only. Instead, use the Language column. */
    const LanguageAndRegion = 'LanguageAndRegion';

    /** The report will include a column that contains the keyword that matched the user's search query. */
    const Keyword = 'Keyword';

    /** The report will include a column that contains the delivered match type. */
    const MatchType = 'MatchType';

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

/**
 * Defines the data columns that you can include in a product target performance report.
 * @link http://msdn.microsoft.com/en-us/library/dn195844(v=msads.80).aspx ProductTargetPerformanceReportColumn Value Set
 */
final class ProductTargetPerformanceReportColumn
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

    /** The report will include a column that contains the name of the product target. */
    const ProductTarget = 'ProductTarget';

    /** The report will include a column that contains the unique identifier of the ad group criterion, which is the product target. */
    const AdGroupCriterionId = 'AdGroupCriterionId';

    /** The report will include a column that contains the ad identifier. */
    const AdId = 'AdId';

    /** The report will include a column that contains the maximum cost-per-click. */
    const CurrentMaxCpc = 'CurrentMaxCpc';

    /** The report will include a column that contains the currency used by the account to which the ad belongs. For possible values, see the CurrencyType value set. */
    const CurrencyCode = 'CurrencyCode';

    /** The report will include a column that contains the number of times that the ad was displayed. */
    const Impressions = 'Impressions';

    /** The report will include a column that contains the number of times that the ad was clicked. */
    const Clicks = 'Clicks';

    /** The report will include a column that contains the click-through rate. The formula for calculating the click-through rate is (clicks / impressions) * 100. */
    const Ctr = 'Ctr';

    /** The report will include a column that contains the average cost per click (CPC). The formula for calculating the average CPC is (cost of clicks / clicks). */
    const AverageCpc = 'AverageCpc';

    /** The report will include a column that contains the total spend on the ad for the specified time period. */
    const Spend = 'Spend';

    /** The report will include a column that contains the number of conversions. */
    const Conversions = 'Conversions';

    /** The report will include a column that contains the conversion rate as a percentage. The formula for calculating the conversion rate is (conversions / clicks) * 100. */
    const ConversionRate = 'ConversionRate';

    /** The report will include a column that contains the cost per conversion. The formula for calculating the cost per conversion is (spend / conversions). */
    const CostPerConversion = 'CostPerConversion';

    /** The report will include a column that contains the type of device on which the ad appeared. For a list of possible values, see DeviceTypeReportFilter. */
    const DeviceType = 'DeviceType';

    /** The report will include a column that contains the language used by the website that displayed the ad. */
    const Language = 'Language';
}

/**
 * Defines the base object for all report requests.
 * @link http://msdn.microsoft.com/en-us/library/bb671813(v=msads.80).aspx ReportRequest Data Object
 */
class ReportRequest
{
    /**
     * The format of the report data. For example, you can request the data in comma-separated values (CSV) format or XML format. The default is CSV format.
     * @var ReportFormat
     */
    public $Format;

    /**
     * The language to use to generate the report headers and columns. The default is English.
     * @var ReportLanguage
     */
    public $Language;

    /**
     * The name of the report. The name is included in the report header. If you do not specify a report name, the system generates a name in the form, ReportType-ReportDateTime.
     * @var string
     */
    public $ReportName;

    /**
     * Determines whether you want the service to generate the report only if all the data is available (has been processed).
     * @var boolean
     */
    public $ReturnOnlyCompleteData;
}

/**
 * Defines an error object that contains the details that explain why the service operation failed.
 * @link http://msdn.microsoft.com/en-us/library/dn169137(v=msads.80).aspx AdApiError Data Object
 */
final class AdApiError
{
    /**
     * A numeric error code that identifies the error.
     * @var int
     */
    public $Code;

    /**
     * A message that contains additional details about the error. This string can be empty.
     * @var string
     */
    public $Detail;

    /**
     * A symbolic string constant that identifies the error. For example, UserIsNotAuthorized.
     * @var string
     */
    public $ErrorCode;

    /**
     * A message that describes the error.
     * @var string
     */
    public $Message;
}

/**
 * Defines a fault object that operations return when generic errors occur, such as an authentication error.
 * @link http://msdn.microsoft.com/en-us/library/dn169140(v=msads.80).aspx AdApiFaultDetail Data Object
 */
final class AdApiFaultDetail extends ApplicationFault
{
    /**
     * An array of AdApiError objects that contains the details that explain why the service operation failed.
     * @var AdApiError[]
     */
    public $Errors;
}

/**
 * Defines an error object that identifies the item within the batch of items in the request message that caused the operation to fail, and describes the reason for the failure.
 * @link http://msdn.microsoft.com/en-us/library/dn169134(v=msads.80).aspx BatchError Data Object
 */
final class BatchError
{
    /**
     * A numeric error code that identifies the error.
     * @var int
     */
    public $Code;

    /**
     * A message that provides additional details about the batch error. This string can be empty.
     * @var string
     */
    public $Details;

    /**
     * A symbolic string constant that identifies the error. For example, UserIsNotAuthorized.
     * @var string
     */
    public $ErrorCode;

    /**
     * The zero-based index of the item in the batch of items in the request message that failed.
     * @var int
     */
    public $Index;

    /**
     * A message that describes the error.
     * @var string
     */
    public $Message;
}

/**
 * Defines an error object that contains the details that explain why the service operation failed.
 * @link http://msdn.microsoft.com/en-us/library/dn169135(v=msads.80).aspx OperationError Data Object
 */
final class OperationError
{
    /**
     * A numeric error code that identifies the error
     * @var int
     */
    public $Code;

    /**
     * A message that provides additional details about the error. This string can be empty.
     * @var string
     */
    public $Details;

    /**
     * A symbolic string constant that identifies the error. For example, UserIsNotAuthorized.
     * @var string
     */
    public $ErrorCode;

    /**
     * A message that describes the error.
     * @var string
     */
    public $Message;
}

/**
 * Defines a fault object that operations return when web service-specific errors occur, such as when the request message contains incomplete or invalid data.
 * @link http://msdn.microsoft.com/en-us/library/dn169136(v=msads.80).aspx ApiFaultDetail Data Object
 */
final class ApiFaultDetail extends ApplicationFault
{
    /**
     * An array of BatchError objects that identifies the items in the batch of items in the request message that caused the operation to fail. Each object contains the details that explain why the item caused the failure.
     * @var BatchError[]
     */
    public $BatchErrors;

    /**
     * An array of OperationError objects that contains the reasons that explain why the service operation failed when the error is not related to a specific item in the batch of items.
     * @var OperationError[]
     */
    public $OperationErrors;
}

/**
 * Defines the status of a report request.
 * @link http://msdn.microsoft.com/en-us/library/bb672100(v=msads.80).aspx ReportRequestStatus Data Object
 */
final class ReportRequestStatus
{
    /**
     * The URL from where the report can be downloaded. Use the URL only if the Status element contains Success.
     * @var string
     */
    public $ReportDownloadUrl;

    /**
     * The status of a report request.
     * @var ReportRequestStatusType
     */
    public $Status;
}

/**
 * Defines the set of accounts to include in the report.
 * @link http://msdn.microsoft.com/en-us/library/bb671563(v=msads.80).aspx AccountReportScope Data Object
 */
final class AccountReportScope
{
    /**
     * An array of a maximum of 1,000 account identifiers that identifies the account data to include in the report.
     * @var long[]
     */
    public $AccountIds;
}

final class Date
{
    /**
     * @var int
     */
    public $Day;

    /**
     * @var int
     */
    public $Month;

    /**
     * @var int
     */
    public $Year;
}

/**
 * Defines the date range values of a budget summary report request.
 * @link http://msdn.microsoft.com/en-us/library/bb671928(v=msads.80).aspx BudgetSummaryReportTime Data Object
 */
final class BudgetSummaryReportTime
{
    /**
     * The end date of a date range.
     */
    public $CustomDateRangeEnd;

    /**
     * The start date of a date range.
     */
    public $CustomDateRangeStart;

    /**
     * A predefined date range.
     * @var BudgetSummaryReportTimePeriod
     */
    public $PredefinedTime;
}

/**
 * Defines a budget summary report request, which shows how your campaign's budget is performing for the month. For example, the report shows your monthly budget, how much you have spent to date, and whether you are on target to spend your monthly budget.
 * @link http://msdn.microsoft.com/en-us/library/bb672028(v=msads.80).aspx BudgetSummaryReportRequest Data Object
 */
final class BudgetSummaryReportRequest extends ReportRequest
{
    /**
     * The list of columns to include in the report. The report will include the columns in the order that you specify them.
     * @var BudgetSummaryReportColumn[]
     */
    public $Columns;

    /**
     * The scope of the report. Use this element to limit the report to include data for one or more accounts. You must specify at least one account.
     * @var AccountReportScope
     */
    public $Scope;

    /**
     * The time period to use for the report. You can specify a custom date range or select a predefined date range (for example, Today, ThisWeek, or LastMonth).
     * @var BudgetSummaryReportTime
     */
    public $Time;
}

/**
 * Defines the criteria to use to filter the segmentation report data.
 * @link http://msdn.microsoft.com/en-us/library/gg262841(v=msads.80).aspx SegmentationReportFilter Data Object
 */
final class SegmentationReportFilter
{
    /**
     * The report will include data for only the specified age group.
     * @var AgeGroupReportFilter
     */
    public $AgeGroup;

    /**
     * The report will include data for only the specified country/region.
     * @var CountryReportFilter
     */
    public $Country;

    /**
     * The report will include data for only the specified gender.
     * @var GenderReportFilter
     */
    public $Gender;

    /**
     * The report will include data for only the specified goals. The list can contain a maximum of 300 identifiers.
     * @var long[]
     */
    public $GoalIds;

    /**
     * The report will include data for only the specified keywords. The list of identifiers can contain a maximum of 75 keywords. Each keyword can contain a maximum of 100 characters.
     * @var string[]
     */
    public $Keywords;
}

/**
 * Defines an ad group to include in the report.
 * @link http://msdn.microsoft.com/en-us/library/bb671622(v=msads.80).aspx AdGroupReportScope Data Object
 */
final class AdGroupReportScope
{
    /**
     * The identifier of the account that the ad group belongs to.
     * @var long
     */
    public $ParentAccountId;

    /**
     * The identifier of the campaign that the ad group belongs to.
     * @var long
     */
    public $ParentCampaignId;

    /**
     * The identifier of the ad group to limit the scope to.
     * @var long
     */
    public $AdGroupId;
}

/**
 * Defines a campaign to include in the report.
 * @link http://msdn.microsoft.com/en-us/library/bb671721(v=msads.80).aspx CampaignReportScope Data Object
 */
final class CampaignReportScope
{
    /**
     * The identifier of the account that the campaign belongs to.
     * @var long
     */
    public $ParentAccountId;

    /**
     * The identifier of the campaign to limit the scope to.
     * @var long
     */
    public $CampaignId;
}

/**
 * Defines the set of accounts, campaigns, and ad groups to include in the report.
 * @link http://msdn.microsoft.com/en-us/library/bb671547(v=msads.80).aspx AccountThroughAdGroupReportScope Data Object
 */
final class AccountThroughAdGroupReportScope
{
    /**
     * An array of account identifiers that identifies the account data to include in the report. You can specify a maximum of 1,000 account identifiers.
     * @var long[]
     */
    public $AccountIds;

    /**
     * An array of AdGroupReportScope objects that identifies the ad group data to include in the report. You can specify a maximum of 300 ad group identifiers.
     * @var AdGroupReportScope[]
     */
    public $AdGroups;

    /**
     * An array of CampaignReportScope objects that identifies the campaign data to include in the report. You can specify a maximum of 300 campaign identifiers.
     * @var CampaignReportScope[]
     */
    public $Campaigns;
}

/**
 * Defines the date range values of a report request.
 * @link http://msdn.microsoft.com/en-us/library/bb671895(v=msads.80).aspx ReportTime Data Object
 */
final class ReportTime
{
    /**
     * The end date of the custom date range. The end date cannot be later than today's date.
     */
    public $CustomDateRangeEnd;

    /**
     * The start date of the custom date range. The start date must be earlier than or the same as the end date.
     */
    public $CustomDateRangeStart;

    /**
     * A predefined date range value. Each report request type specifies the predefined time periods that you can specify for each aggregation type.
     * @var ReportTimePeriod
     */
    public $PredefinedTime;
}

/**
 * Defines a segmentation report request, which shows the number of times that users-broken out by age group, gender, and geographical location-reach the different stages of the conversion funnel. You can use this report to get information about how users of different demographics or locations behave on your website from the time they click an ad until they reach the conversion goal. For example, you can use this report to determine which demographic goes further into the funnel, and which stages you need to improve to increase the chance that users of the other demographic groups will continue to the next stage.
 * @link http://msdn.microsoft.com/en-us/library/gg262846(v=msads.80).aspx SegmentationReportRequest Data Object
 */
final class SegmentationReportRequest extends ReportRequest
{
    /**
     * The type of aggregation to use to aggregate the report data. For example, you can aggregate the report data by day or month, or request a summary report. The Time element specifies the time period to use for the aggregation.
     * @var NonHourlyReportAggregation
     */
    public $Aggregation;

    /**
     * The list of columns to include in the report. The report will include the columns in the order that you specify them.
     * @var SegmentationReportColumn[]
     */
    public $Columns;

    /**
     * The filter information to use to filter the report data.
     * @var SegmentationReportFilter
     */
    public $Filter;

    /**
     * The scope of the report. For example, you can limit the report to include data for a combination of accounts, ad groups, and campaigns.
     * @var AccountThroughAdGroupReportScope
     */
    public $Scope;

    /**
     * The time period to use for the report. You can specify a custom date range or select a predefined date range (for example, Today, ThisWeek, or LastMonth).
     * @var ReportTime
     */
    public $Time;
}

/**
 * Defines the criteria to use to filter the tactic and channel report data.
 * @link http://msdn.microsoft.com/en-us/library/gg262855(v=msads.80).aspx TacticChannelReportFilter Data Object
 */
final class TacticChannelReportFilter
{
    /**
     * The report will include data for only the specified channels. The list can contain a maximum of 300 identifiers.
     * @var long[]
     */
    public $ChannelIds;

    /**
     * The report will include data for only the specified tactics. The list can contain a maximum of 300 identifiers.
     * @var long[]
     */
    public $TacticIds;

    /**
     * The report will include data for only the specified ad groups. The identifiers identify ad groups that you defined on a paid search provider other than Bing Ads. The list can contain a maximum of 300 identifiers.
     * @var long[]
     */
    public $ThirdPartyAdGroupIds;

    /**
     * The report will include data for only the specified campaigns. The identifiers identify campaigns that you defined on a paid search provider other than Bing Ads. The list can contain a maximum of 300 campaigns.
     * @var long[]
     */
    public $ThirdPartyCampaignIds;
}

/**
 * Defines a tactic and channel report request that shows the number of times that users reach the different stages of a conversion funnel, broken out by advertising tactic and channel. You can use this report to get information about which tactic and channel are generating the most revenue and return-on-ad spend.
 * @link http://msdn.microsoft.com/en-us/library/gg262842(v=msads.80).aspx TacticChannelReportRequest Data Object
 */
final class TacticChannelReportRequest extends ReportRequest
{
    /**
     * The type of aggregation to use to aggregate the report data. For example, you can aggregate the report data by day or month, or request a summary report. The Time element specifies the time period to use for the aggregation.
     * @var NonHourlyReportAggregation
     */
    public $Aggregation;

    /**
     * The list of columns to include in the report. The report will include the columns in the order that you specify them.
     * @var TacticChannelReportColumn[]
     */
    public $Columns;

    /**
     * The filter information to use to filter the report data.
     * @var TacticChannelReportFilter
     */
    public $Filter;

    /**
     * The scope of the report. For example, you can limit the report to include data for a combination of accounts, ad groups, and campaigns.
     * @var AccountThroughAdGroupReportScope
     */
    public $Scope;

    /**
     * The time period to use for the report. You can specify a custom date range or select a predefined date range (for example, Today, ThisWeek, or LastMonth).
     * @var ReportTime
     */
    public $Time;
}

/**
 * Defines the criteria to use to filter the behavioral segment performance report data.
 * @link http://msdn.microsoft.com/en-us/library/dd796798(v=msads.80).aspx BehavioralPerformanceReportFilter Data Object
 */
final class BehavioralPerformanceReportFilter
{
    /**
     * The report will include data for only the specified distribution medium. For example, you can use the filter to include data for only search ads.
     * @var AdDistributionReportFilter
     */
    public $AdDistribution;

    /**
     * The report will include data for only the specified ad types. For example, the report can include data for mobile or text ads. You can specify one or more ad types.
     * @var AdTypeReportFilter
     */
    public $AdType;

    /**
     * The report will include data for only the specified behavioral segments. This list can contain a maximum of 300 identifiers.
     * @var long[]
     */
    public $BehavioralIds;

    /**
     * The report will include data for only the specified delivered match types (as opposed to the bid match type).For example, you can use the filter to include data for ads that were delivered using the exact or phrase match type.
     * @var DeliveredMatchTypeReportFilter
     */
    public $DeliveredMatchType;

    /**
     * The report will include data for only the specified Bing Ads websites where the ads are displayed. For example, you can use the filter to include data for only ads displayed on Bing.com (United States).
     * @var LanguageAndRegionReportFilter
     */
    public $LanguageAndRegion;
}

/**
 * Defines a behavioral segment performance report request.
 * @link http://msdn.microsoft.com/en-us/library/dd796908(v=msads.80).aspx BehavioralPerformanceReportRequest Data Object
 */
final class BehavioralPerformanceReportRequest extends ReportRequest
{
    /**
     * The type of aggregation to use for the report data. For example, you can aggregate the report data by day or month, or request a summary report. The Time element specifies the time period to use for the aggregation.
     * @var ReportAggregation
     */
    public $Aggregation;

    /**
     * The list of columns to include in the report. The report will include the columns in the order that you specify them.
     * @var BehavioralPerformanceReportColumn[]
     */
    public $Columns;

    /**
     * The filter information to use to filter the report data.
     * @var BehavioralPerformanceReportFilter
     */
    public $Filter;

    /**
     * The scope of the report. Use this element to limit the report to include data for a combination of accounts, ad groups, and campaigns.
     * @var AccountThroughAdGroupReportScope
     */
    public $Scope;

    /**
     * The time period to use for the report. You can specify a custom data range or select a predefined date range (for example, Today, ThisWeek, or LastMonth).
     * @var ReportTime
     */
    public $Time;
}

/**
 * Defines the criteria to use to filter the search query performance report data.
 * @link http://msdn.microsoft.com/en-us/library/ee703961(v=msads.80).aspx SearchQueryPerformanceReportFilter Data Object
 */
final class SearchQueryPerformanceReportFilter
{
    /**
     * The report will include data for ads that have the specified status value. You can specify one or more status values.
     * @var AdStatusReportFilter
     */
    public $AdStatus;

    /**
     * The report will include data for only the specified ad types. For example, the report can include data for mobile or text ads. You can specify one or more ad types.
     * @var AdTypeReportFilter
     */
    public $AdType;

    /**
     * The report will include data for campaigns that have the specified status value. You can specify one or more status values.
     * @var CampaignStatusReportFilter
     */
    public $CampaignStatus;

    /**
     * The report will include data for only the specified delivered match types (as opposed to the bid match type). For example, you can use the filter to include data for ads that were delivered using the exact or phrase match type.
     * @var DeliveredMatchTypeReportFilter
     */
    public $DeliveredMatchType;

    /**
     * Do not use this filter; it is for backwards compatibility only. Instead, use the LanguageCode filter.
     * @var LanguageAndRegionReportFilter
     */
    public $LanguageAndRegion;

    /**
     * The report will include data for only websites that used the specified languages. For a list of possible values, see LanguageCode Values.
     * @var string[]
     */
    public $LanguageCode;

    /**
     * The report will include data for only the specified search query strings.
     * @var string[]
     */
    public $SearchQueries;
}

/**
 * Defines a search query performance report request that aggregates the performance data by search query.
 * @link http://msdn.microsoft.com/en-us/library/ee703962(v=msads.80).aspx SearchQueryPerformanceReportRequest Data Object
 */
final class SearchQueryPerformanceReportRequest extends ReportRequest
{
    /**
     * The type of aggregation to use to aggregate the report data. For example, you can aggregate the report data by day or month, or request a summary report. The Time element specifies the time period to use for the aggregation.
     * @var SearchQueryReportAggregation
     */
    public $Aggregation;

    /**
     * The list of columns to include in the report. The report will include the columns in the order that you specify them.
     * @var SearchQueryPerformanceReportColumn[]
     */
    public $Columns;

    /**
     * The filter information to use to filter the report data.
     * @var SearchQueryPerformanceReportFilter
     */
    public $Filter;

    /**
     * The scope of the report. Use this element to limit the report to include data for a combination of accounts, ad groups, and campaigns.
     * @var AccountThroughAdGroupReportScope
     */
    public $Scope;

    /**
     * The time period to use for the report. You can specify a custom date range or select a predefined date range (for example, Today, ThisWeek, or LastMonth).
     * @var ReportTime
     */
    public $Time;
}

/**
 * Defines a call detail report request. There is one row or record in the report for each call made to the tracked number. You can include details in the report such as call duration and phone spend.
 * @link http://msdn.microsoft.com/en-us/library/dn195845(v=msads.80).aspx CallDetailReportRequest Data Object
 */
final class CallDetailReportRequest extends ReportRequest
{
    /**
     * The type of aggregation to use to aggregate the report data. The Time element specifies the time period to use for the aggregation.
     * @var ReportAggregation
     */
    public $Aggregation;

    /**
     * The list of columns to include in the report. The report will include the columns in the order that you specify them.
     * @var CallDetailReportColumn[]
     */
    public $Columns;

    /**
     * The scope of the report. Use this element to limit the report to include data for specified accounts, campaigns, or ad groups.
     * @var AccountThroughAdGroupReportScope
     */
    public $Scope;

    /**
     * The time period to use for the report. You can specify a custom date range or select a predefined date range for example, Today, ThisWeek, or LastMonth.
     * @var ReportTime
     */
    public $Time;
}

/**
 * Defines the criteria to use to filter the account performance report data.
 * @link http://msdn.microsoft.com/en-us/library/bb671671(v=msads.80).aspx AccountPerformanceReportFilter Data Object
 */
final class AccountPerformanceReportFilter
{
    /**
     * The report will include data for only the specified distribution medium. For example, you can use the filter to include data for only search ads.
     * @var AdDistributionReportFilter
     */
    public $AdDistribution;

    /**
     * The report will include data for only the specified types of devices on which the ad is displayed. For example, you can use the filter to include data for only text ads displayed on smartphones.
     * @var DeviceTypeReportFilter
     */
    public $DeviceType;
}

/**
 * Defines an account performance report request that aggregates the performance data by account for a specified time period. You can include details in the report (such as clicks, conversion, and spend) that you can use to identify accounts that are performing well, and those that may need to be adjusted to optimize the monthly budget.
 * @link http://msdn.microsoft.com/en-us/library/bb671927(v=msads.80).aspx AccountPerformanceReportRequest Data Object
 */
final class AccountPerformanceReportRequest extends ReportRequest
{
    /**
     * The type of aggregation to use for the report data. For example, you can aggregate the report data by day or month, or request a summary report. The Time element specifies the time period to use for the aggregation.
     * @var ReportAggregation
     */
    public $Aggregation;

    /**
     * The list of columns to include in the report. The report will include the columns in the order that you specify them.
     * @var AccountPerformanceReportColumn[]
     */
    public $Columns;

    /**
     * The filter information to use to filter the report data.
     * @var AccountPerformanceReportFilter
     */
    public $Filter;

    /**
     * The scope of the report. Use this element to limit the report to include data for one or more accounts.
     * @var AccountReportScope
     */
    public $Scope;

    /**
     * The time period to use for the report. You can specify a custom date range or select a predefined date range (for example, Today, ThisWeek, or LastMonth).
     * @var ReportTime
     */
    public $Time;
}

/**
 * Defines the criteria to use to filter the campaign performance report data.
 * @link http://msdn.microsoft.com/en-us/library/bb671808(v=msads.80).aspx CampaignPerformanceReportFilter Data Object
 */
final class CampaignPerformanceReportFilter
{
    /**
     * The report will include data for only the specified distribution medium. For example, you can use the filter to include data for only search ads.
     * @var AdDistributionReportFilter
     */
    public $AdDistribution;

    /**
     * The report will include data for only the specified type of devices on which the ad is displayed. For example, you can use the filter to include data for only text ads displayed on smartphones.
     * @var DeviceTypeReportFilter
     */
    public $DeviceType;

    /**
     * The report will include data for only the specified ad group status values. For example, you can use the filter to include data for only active ad groups.
     * @var CampaignStatusReportFilter
     */
    public $Status;
}

/**
 * Defines the set of accounts and campaigns to include in the report.
 * @link http://msdn.microsoft.com/en-us/library/bb671549(v=msads.80).aspx AccountThroughCampaignReportScope Data Object
 */
final class AccountThroughCampaignReportScope
{
    /**
     * An array of account identifiers that identifies the account data to include in the report. You can specify a maximum of 1,000 account identifiers.
     * @var long[]
     */
    public $AccountIds;

    /**
     * An array of CampaignReportScope objects that identifies the campaign data to include in the report. You can specify a maximum of 300 campaign identifiers.
     * @var CampaignReportScope[]
     */
    public $Campaigns;
}

/**
 * Defines a campaign performance report request that aggregates the performance data by campaign for a specified time period. You can include details in the report (such as clicks, conversion, and spend) that you can use to identify campaigns that are performing well, and those that may need to be adjusted to optimize the monthly budget.
 * @link http://msdn.microsoft.com/en-us/library/bb671804(v=msads.80).aspx CampaignPerformanceReportRequest Data Object
 */
final class CampaignPerformanceReportRequest extends ReportRequest
{
    /**
     * The type of aggregation to use to aggregate the report data. For example, you can aggregate the report data by day or month, or request a summary report. The Time element specifies the time period to use for the aggregation.
     * @var ReportAggregation
     */
    public $Aggregation;

    /**
     * The list of columns to include in the report. The report will include the columns in the order that you specify them.
     * @var CampaignPerformanceReportColumn[]
     */
    public $Columns;

    /**
     * The filter information to use to filter the report data.
     * @var CampaignPerformanceReportFilter
     */
    public $Filter;

    /**
     * The scope of the report. Use this element to limit the report to include data for a combination of accounts and campaigns.
     * @var AccountThroughCampaignReportScope
     */
    public $Scope;

    /**
     * The time period to use for the report. You can specify a custom date range or select a predefined date range (for example, Today, ThisWeek, or LastMonth).
     * @var ReportTime
     */
    public $Time;
}

/**
 * Defines the criteria to use to filter the ad dynamic text performance report data.
 * @link http://msdn.microsoft.com/en-us/library/bb672086(v=msads.80).aspx AdDynamicTextPerformanceReportFilter Data Object
 */
final class AdDynamicTextPerformanceReportFilter
{
    /**
     * The report will include data for only the specified distribution medium. For example, you can use the filter to include data for only search ads.
     * @var AdDistributionReportFilter
     */
    public $AdDistribution;

    /**
     * The report will include data for only the specified ad types. For example, the report can include data for mobile or text ads. You can specify one or more ad types.
     * @var AdTypeReportFilter
     */
    public $AdType;

    /**
     * The report will include data for only the specified types of devices on which the ad is displayed. For example, you can use the filter to include data for only text ads displayed on smartphones.
     * @var DeviceTypeReportFilter
     */
    public $DeviceType;

    /**
     * Do not use this filter; it is for backwards compatibility only. Instead, use the LanguageCode filter.
     * @var LanguageAndRegionReportFilter
     */
    public $LanguageAndRegion;

    /**
     * The report will include data for only websites that used the specified languages. For a list of possible values, see LanguageCode Values.
     * @var string[]
     */
    public $LanguageCode;
}

/**
 * Defines an ad dynamic text performance report request that aggregates the performance data by ad for a specified time period. The data is broken out by ad title and destination URL. If you used parameter substitution strings in the ad title, you can use this report to identify the dynamic text strings that are performing well based on metrics (such as clicks, conversions, and spend), as well as those that you should consider changing.
 * @link http://msdn.microsoft.com/en-us/library/bb671950(v=msads.80).aspx AdDynamicTextPerformanceReportRequest Data Object
 */
final class AdDynamicTextPerformanceReportRequest extends ReportRequest
{
    /**
     * The type of aggregation to use for the report data. For example, you can aggregate the report data by day or month, or request a summary report. The Time element specifies the time period to use for the aggregation.
     * @var NonHourlyReportAggregation
     */
    public $Aggregation;

    /**
     * The list of columns to include in the report. The report will include the columns in the order that you specify them.
     * @var AdDynamicTextPerformanceReportColumn[]
     */
    public $Columns;

    /**
     * The filter information to use to filter the report data.
     * @var AdDynamicTextPerformanceReportFilter
     */
    public $Filter;

    /**
     * The scope of the report. Use this element to limit the report to include data for a combination of accounts, ad groups, and campaigns.
     * @var AccountThroughAdGroupReportScope
     */
    public $Scope;

    /**
     * The time period to use for the report. You can specify a custom date range or select a predefined date range (for example, Today, ThisWeek, or LastMonth).
     * @var ReportTime
     */
    public $Time;
}

/**
 * Defines the criteria to use to filter the ad group performance report data.
 * @link http://msdn.microsoft.com/en-us/library/bb671729(v=msads.80).aspx AdGroupPerformanceReportFilter Data Object
 */
final class AdGroupPerformanceReportFilter
{
    /**
     * The report will include data for only the specified distribution medium. For example, you can use the filter to include data for only search ads.
     * @var AdDistributionReportFilter
     */
    public $AdDistribution;

    /**
     * The report will include data for only the specified types of devices on which the ad is displayed. For example, you can use the filter to include data for only text ads displayed on smartphones.
     * @var DeviceTypeReportFilter
     */
    public $DeviceType;

    /**
     * Do not use this filter; it is for backwards compatibility only. Instead, use the LanguageCode filter.
     * @var LanguageAndRegionReportFilter
     */
    public $LanguageAndRegion;

    /**
     * The report will include data for only websites that used the specified languages. For a list of possible values, see LanguageCode Values.
     * @var string[]
     */
    public $LanguageCode;

    /**
     * The report will include data for only the specified ad group status values. For example, you can use the filter to include data for only active ad groups.
     * @var AdGroupStatusReportFilter
     */
    public $Status;
}

/**
 * Defines an ad group performance report request that aggregates the performance data by ad group for a specified time period. You can include details in the report (such as clicks, conversion, and spend) that you can use to identify ad groups that are performing well, and those that may need to be adjusted to optimize the monthly budget.
 * @link http://msdn.microsoft.com/en-us/library/bb671686(v=msads.80).aspx AdGroupPerformanceReportRequest Data Object
 */
final class AdGroupPerformanceReportRequest extends ReportRequest
{
    /**
     * The type of aggregation to use for the report data. For example, you can aggregate the report data by day or month, or request a summary report. The Time element specifies the time period to use for the aggregation.
     * @var ReportAggregation
     */
    public $Aggregation;

    /**
     * The list of columns to include in the report. The report will include the columns in the order that you specify them.
     * @var AdGroupPerformanceReportColumn[]
     */
    public $Columns;

    /**
     * The filter information to use to filter the report data.
     * @var AdGroupPerformanceReportFilter
     */
    public $Filter;

    /**
     * The scope of the report. Use this element to limit the report to include data for a combination of accounts, ad groups, and campaigns.
     * @var AccountThroughAdGroupReportScope
     */
    public $Scope;

    /**
     * The time period to use for the report. You can specify a custom date range or select a predefined date range (for example, Today, ThisWeek, or LastMonth).
     * @var ReportTime
     */
    public $Time;
}

/**
 * Defines the criteria to use to filter the ad performance report request data.
 * @link http://msdn.microsoft.com/en-us/library/bb671609(v=msads.80).aspx AdPerformanceReportFilter Data Object
 */
final class AdPerformanceReportFilter
{
    /**
     * The report will include data for only the specified distribution medium. For example, you can use the filter to include data for only search ads.
     * @var AdDistributionReportFilter
     */
    public $AdDistribution;

    /**
     * The report will include data for only the specified ad types. For example, the report can include data for mobile or text ads. You can specify one or more ad types.
     * @var AdTypeReportFilter
     */
    public $AdType;

    /**
     * The report will include data for only the specified types of devices on which the ad is displayed. For example, you can use the filter to include data for only text ads displayed on smartphones.
     * @var DeviceTypeReportFilter
     */
    public $DeviceType;

    /**
     * Do not use this filter; it is for backwards compatibility only. Instead, use the LanguageCode filter.
     * @var LanguageAndRegionReportFilter
     */
    public $LanguageAndRegion;

    /**
     * The report will include data for only websites that used the specified languages. For a list of possible values, see LanguageCode Values.
     * @var string[]
     */
    public $LanguageCode;
}

/**
 * Defines an ad performance report request that aggregates the performance data by ad for a specified time period. You can use this report to identify ads that are performing well (in terms of clicks, conversions, and spend), and those that you may need to adjust to improve the click-through rate.
 * @link http://msdn.microsoft.com/en-us/library/bb672006(v=msads.80).aspx AdPerformanceReportRequest Data Object
 */
final class AdPerformanceReportRequest extends ReportRequest
{
    /**
     * The type of aggregation to use for the report data. For example, you can aggregate the report data by day or month, or request a summary report. The Time element specifies the time period to use for the aggregation.
     * @var NonHourlyReportAggregation
     */
    public $Aggregation;

    /**
     * The list of columns to include in the report. The report will include the columns in the order that you specify them.
     * @var AdPerformanceReportColumn[]
     */
    public $Columns;

    /**
     * The filter information to use to filter the report data.
     * @var AdPerformanceReportFilter
     */
    public $Filter;

    /**
     * The scope of the report. Use this element to limit the report to include data for a combination of accounts, ad groups, and campaigns.
     * @var AccountThroughAdGroupReportScope
     */
    public $Scope;

    /**
     * The time period to use for the report. You can specify a custom date range or select a predefined date range (for example, Today, ThisWeek, or LastMonth).
     * @var ReportTime
     */
    public $Time;
}

/**
 * Defines the criteria to use to filter the rich ad component keyword performance report data.
 * @link http://msdn.microsoft.com/en-us/library/hh180147(v=msads.80).aspx RichAdComponentPerformanceReportFilter Data Object
 */
final class RichAdComponentPerformanceReportFilter
{
    /**
     * The report will include data for only the specified components. For example, you can use the filter to include data for only deep links and video.
     * @var ComponentTypeFilter
     */
    public $ComponentType;

    /**
     * The report will include data for only the specified rich ad types. For example, you can use the filter to include data for only rich ads that include two images and four links.
     * @var RichAdSubTypeFilter
     */
    public $RichAdSubType;
}

/**
 * Defines a rich ad performance report request that aggregates the performance data by ad for a specified time period. You can use this report to identify the components of a rich ad that are generating the most clicks.
 * @link http://msdn.microsoft.com/en-us/library/hh180150(v=msads.80).aspx RichAdComponentPerformanceReportRequest Data Object
 */
final class RichAdComponentPerformanceReportRequest extends ReportRequest
{
    /**
     * The type of aggregation to use for the report data. For example, you can aggregate the report data by day or month, or request a summary report. The Time element specifies the time period to use for the aggregation.
     * @var NonHourlyReportAggregation
     */
    public $Aggregation;

    /**
     * The list of columns to include in the report. The report will include the columns in the order that you specify them.
     * @var RichAdComponentPerformanceReportColumn[]
     */
    public $Columns;

    /**
     * The filter information to use to filter the report data.
     * @var RichAdComponentPerformanceReportFilter
     */
    public $Filter;

    /**
     * The scope of the report. Use this element to limit the report to include data for a combination of accounts, ad groups, and campaigns.
     * @var AccountThroughAdGroupReportScope
     */
    public $Scope;

    /**
     * The time period to use for the report. You can specify a custom date range or select a predefined date range (for example, Today, ThisWeek, or LastMonth).
     * @var ReportTime
     */
    public $Time;
}

/**
 * Defines the criteria to use to filter the keyword performance report data.
 * @link http://msdn.microsoft.com/en-us/library/bb672082(v=msads.80).aspx KeywordPerformanceReportFilter Data Object
 */
final class KeywordPerformanceReportFilter
{
    /**
     * The report will include data for only the specified distribution medium. For example, you can use the filter to include data for only search ads.
     * @var AdDistributionReportFilter
     */
    public $AdDistribution;

    /**
     * The report will include data for only the specified ad types. For example, the report can include data for mobile or text ads. You can specify one or more ad types.
     * @var AdTypeReportFilter
     */
    public $AdType;

    /**
     * The report will include data for only the specified bid match types (as opposed to the delivered match type).For example, you can use the filter to include data for ads that were bid on using the exact or phrase match type.
     * @var BidMatchTypeReportFilter
     */
    public $BidMatchType;

    /**
     * @var CashbackReportFilter
     */
    public $Cashback;

    /**
     * The report will include data for only the specified delivered match types (as opposed to the bid match type).For example, you can use the filter to include data for ads that were delivered using the exact or phrase match type.
     * @var DeliveredMatchTypeReportFilter
     */
    public $DeliveredMatchType;

    /**
     * The report will include data for only the specified types of devices on which the ad is displayed. For example, you can use the filter to include data for only text ads displayed on smartphones.
     * @var DeviceTypeReportFilter
     */
    public $DeviceType;

    /**
     * The report will include data for only keywords with the specified relevance. You can filter the report by one or more of the following relevance values.
     * @var int[]
     */
    public $KeywordRelevance;

    /**
     * The report will include data for only the specified keywords. You can specify a maximum of 75 keywords. Each keyword can contain a maximum of 100 characters.
     * @var string[]
     */
    public $Keywords;

    /**
     * The report will include data for only the specified landing page relevance. You can filter the report by one or more of the following relevance values.
     * @var int[]
     */
    public $LandingPageRelevance;

    /**
     * The report will include data for only the specified landing page user experience. You can filter the report by one or more of the following user experience values.
     * @var int[]
     */
    public $LandingPageUserExperience;

    /**
     * Do not use this filter; it is for backwards compatibility only. Instead, use the LanguageCode filter.
     * @var LanguageAndRegionReportFilter
     */
    public $LanguageAndRegion;

    /**
     * The report will include data for only websites that used the specified languages. For a list of possible values, see LanguageCode Values.
     * @var string[]
     */
    public $LanguageCode;

    /**
     * The report will include data for only keywords with the specified quality scores. You can filter the report based on one or more of the following relevance values.
     * @var int[]
     */
    public $QualityScore;
}

/**
 * Defines a keyword performance report request that aggregates the performance data by keyword for a specified time period. You can include details in the report (such as clicks, conversion, and spend) that you can use to identify keywords that are performing well, and those that are not.
 * @link http://msdn.microsoft.com/en-us/library/bb671816(v=msads.80).aspx KeywordPerformanceReportRequest Data Object
 */
final class KeywordPerformanceReportRequest extends ReportRequest
{
    /**
     * The type of aggregation to use to aggregate the report data. For example, you can aggregate the report data by day or month, or request a summary report. The default is Summary.
     * @var ReportAggregation
     */
    public $Aggregation;

    /**
     * The list of columns to include in the report. The report will include the columns in the order that you specify them.
     * @var KeywordPerformanceReportColumn[]
     */
    public $Columns;

    /**
     * The filter information to use to filter the report data.
     * @var KeywordPerformanceReportFilter
     */
    public $Filter;

    /**
     * The scope of the report. Use this element to limit the report to include data for a combination of accounts, ad groups, and campaigns.
     * @var AccountThroughAdGroupReportScope
     */
    public $Scope;

    /**
     * The time period to use for the report. You can specify a custom date range or select a predefined date range (for example, Today, ThisWeek, or LastMonth).
     * @var ReportTime
     */
    public $Time;
}

/**
 * Defines the criteria to use to filter the destination URL performance report data.
 * @link http://msdn.microsoft.com/en-us/library/bb671544(v=msads.80).aspx DestinationUrlPerformanceReportFilter Data Object
 */
final class DestinationUrlPerformanceReportFilter
{
    /**
     * The report will include data for only the specified distribution medium. For example, you can use the filter to include data for only search ads.
     * @var AdDistributionReportFilter
     */
    public $AdDistribution;

    /**
     * The report will include data for only the specified types of devices on which the ad is displayed. For example, you can use the filter to include data for only text ads displayed on smartphones.
     * @var DeviceTypeReportFilter
     */
    public $DeviceType;

    /**
     * Do not use this filter; it is for backwards compatibility only. Instead, use the LanguageCode filter.
     * @var LanguageAndRegionReportFilter
     */
    public $LanguageAndRegion;

    /**
     * The report will include data for only websites that used the specified languages. For a list of possible values, see LanguageCode Values.
     * @var string[]
     */
    public $LanguageCode;
}

/**
 * Defines a destination URL performance report request that aggregates the performance data by ad for the specified time period; the data is broken out by destination URL. You could use this report if you used parameter substitution strings in the destination URL to identify ads that are performing well in terms of clicks, conversions, and spend, in addition to those that you may need to adjust to improve the click-through rate.
 * @link http://msdn.microsoft.com/en-us/library/bb671480(v=msads.80).aspx DestinationUrlPerformanceReportRequest Data Object
 */
final class DestinationUrlPerformanceReportRequest extends ReportRequest
{
    /**
     * The type of aggregation to use to aggregate the report data. For example, you can aggregate the report data by day or month, or request a summary report. The Time element specifies the time period to use for the aggregation.
     * @var NonHourlyReportAggregation
     */
    public $Aggregation;

    /**
     * The list of columns to include in the report. The report will include the columns in the order that you specify them.
     * @var DestinationUrlPerformanceReportColumn[]
     */
    public $Columns;

    /**
     * The filter information to use to filter the report data.
     * @var DestinationUrlPerformanceReportFilter
     */
    public $Filter;

    /**
     * The scope of the report. Use this element to limit the report to include data for a combination of accounts, ad groups, and campaigns.
     * @var AccountThroughAdGroupReportScope
     */
    public $Scope;

    /**
     * The time period to use for the report. You can specify a custom date range or select a predefined date range (for example, Today, ThisWeek, or LastMonth).
     * @var ReportTime
     */
    public $Time;
}

/**
 * Defines the criteria to use to filter the gender demographic report data.
 * @link http://msdn.microsoft.com/en-us/library/bb671580(v=msads.80).aspx AgeGenderDemographicReportFilter Data Object
 */
final class AgeGenderDemographicReportFilter
{
    /**
     * The report will include data for only the specified distribution medium. For example, you can use the filter to include data for only search ads.
     * @var AdDistributionReportFilter
     */
    public $AdDistribution;

    /**
     * Do not use this filter; it is for backwards compatibility only. Instead, use the LanguageCode filter.
     * @var LanguageAndRegionReportFilter
     */
    public $LanguageAndRegion;

    /**
     * The report will include data for only websites that used the specified languages. For a list of possible values, see LanguageCode Values.
     * @var string[]
     */
    public $LanguageCode;
}

/**
 * Defines an age and gender demographic report request, which shows the estimated performance of an ad group broken out by age and gender demographics. You can use the information to identify whether your ads are targeting the intended genders and age groups, and whether you need to adjust your ads accordingly.
 * @link http://msdn.microsoft.com/en-us/library/bb671917(v=msads.80).aspx AgeGenderDemographicReportRequest Data Object
 */
final class AgeGenderDemographicReportRequest extends ReportRequest
{
    /**
     * The type of aggregation to use for the report data. For example, you can aggregate the report data by day or month, or request a summary report. The Time element specifies the time period to use for the aggregation.
     * @var NonHourlyReportAggregation
     */
    public $Aggregation;

    /**
     * 
     * @var AgeGenderDemographicReportColumn[]
     */
    public $Columns;

    /**
     * The filter information to use to filter the report data.
     * @var AgeGenderDemographicReportFilter
     */
    public $Filter;

    /**
     * The scope of the report. Use this element to limit the report to include data for a combination of accounts, ad groups, and campaigns.
     * @var AccountThroughAdGroupReportScope
     */
    public $Scope;

    /**
     * The time period to use for the report. You can specify a custom date range or select a predefined date range (for example, Today, ThisWeek, or LastMonth).
     * @var ReportTime
     */
    public $Time;
}

/**
 * Defines the criteria to use to filter the metropolitan area demographic report data.
 * @link http://msdn.microsoft.com/en-us/library/bb671825(v=msads.80).aspx MetroAreaDemographicReportFilter Data Object
 */
final class MetroAreaDemographicReportFilter
{
    /**
     * The report will include data for only the specified distribution medium. For example, you can use the filter to include data for only search ads.
     * @var AdDistributionReportFilter
     */
    public $AdDistribution;

    /**
     * The report will include data for only the specified countries/regions where the user that clicked the ad is located.
     * @var CountryReportFilter
     */
    public $Country;

    /**
     * Do not use this filter; it is for backwards compatibility only. Instead, use the LanguageCode filter.
     * @var LanguageAndRegionReportFilter
     */
    public $LanguageAndRegion;

    /**
     * The report will include data for only websites that used the specified languages. For a list of possible values, see LanguageCode Values.
     * @var string[]
     */
    public $LanguageCode;
}

/**
 * Defines a metropolitan area demographic report request, which shows the overall effectiveness and cost of running ads in the different geographical locations, for example countries and regions, states, and metropolitan areas for a specified time period. You can include details in the report, for example clicks and spend that you can use to identify geographical locations where you ads are performing well, and those areas where you may need to adjust your strategy. The report also identifies the physical location of the user and the intended geographical location of the user's search query, for example a user in Seattle searching for services in Portland.
 * @link http://msdn.microsoft.com/en-us/library/bb671790(v=msads.80).aspx MetroAreaDemographicReportRequest Data Object
 */
final class MetroAreaDemographicReportRequest extends ReportRequest
{
    /**
     * The type of aggregation to use to aggregate the report data. For example, you can aggregate the report data by day or week, or request a summary report. The Time element specifies the time period to use for the aggregation.
     * @var NonHourlyReportAggregation
     */
    public $Aggregation;

    /**
     * The list of columns to include in the report. The report will include the columns in the order that you specify them.
     * @var MetroAreaDemographicReportColumn[]
     */
    public $Columns;

    /**
     * The filter information to use to filter the report data.
     * @var MetroAreaDemographicReportFilter
     */
    public $Filter;

    /**
     * The scope of the report. Use this element to limit the report to include data for a combination of accounts, ad groups, and campaigns.
     * @var AccountThroughAdGroupReportScope
     */
    public $Scope;

    /**
     * The time period to use for the report. You can specify a custom date range or select a predefined date range (for example, Today, ThisWeek, or LastMonth).
     * @var ReportTime
     */
    public $Time;
}

/**
 * Defines the criteria to use to filter the publisher usage performance report data.
 * @link http://msdn.microsoft.com/en-us/library/dd796865(v=msads.80).aspx PublisherUsagePerformanceReportFilter Data Object
 */
final class PublisherUsagePerformanceReportFilter
{
    /**
     * The report will include data for only the specified distribution medium. For example, you can use the filter to include data for only search ads.
     * @var AdDistributionReportFilter
     */
    public $AdDistribution;

    /**
     * Do not use this filter; it is for backwards compatibility only. Instead, use the LanguageCode filter.
     * @var LanguageAndRegionReportFilter
     */
    public $LanguageAndRegion;

    /**
     * The report will include data for only websites that used the specified languages. For a list of possible values, see LanguageCode Values.
     * @var string[]
     */
    public $LanguageCode;
}

/**
 * Defines a publisher usage performance report request that aggregates the performance data by publisher website for a specified time period. You can include details in the report (such as clicks, conversions, and spend) that you can use to identify websites that are performing well, and those that you may want to exclude from your campaign.
 * @link http://msdn.microsoft.com/en-us/library/dd797229(v=msads.80).aspx PublisherUsagePerformanceReportRequest Data Object
 */
final class PublisherUsagePerformanceReportRequest extends ReportRequest
{
    /**
     * The type of aggregation to use to aggregate the report data. For example, you can aggregate the report data by day or month, or request a summary report. The Time element specifies the time period to use for the aggregation.
     * @var NonHourlyReportAggregation
     */
    public $Aggregation;

    /**
     * The list of columns to include in the report. The report will include the columns in the order that you specify them.
     * @var PublisherUsagePerformanceReportColumn[]
     */
    public $Columns;

    /**
     * The filter information to use to filter the report data.
     * @var PublisherUsagePerformanceReportFilter
     */
    public $Filter;

    /**
     * The scope of the report. Use this element to limit the report to include data for a combination of accounts, ad groups, and campaigns.
     * @var AccountThroughAdGroupReportScope
     */
    public $Scope;

    /**
     * The time period to use for the report. You can specify a custom date range or select a predefined date range (for example, Today, ThisWeek, or LastMonth).
     * @var ReportTime
     */
    public $Time;
}

/**
 * Defines the criteria to use to filter the website performance report data.
 * @link http://msdn.microsoft.com/en-us/library/dd796955(v=msads.80).aspx SitePerformanceReportFilter Data Object
 */
final class SitePerformanceReportFilter
{
    /**
     * The report will include data for only the specified distribution medium. For example, you can use the filter to include data for only search ads.
     * @var AdDistributionReportFilter
     */
    public $AdDistribution;

    /**
     * The report will include data for only the specified ad types. For example, the report can include data for mobile or text ads. You can specify one or more ad types.
     * @var AdTypeReportFilter
     */
    public $AdType;

    /**
     * The report will include data for only the specified delivered match types (as opposed to the bid match type). For example, you can use the filter to include data for ads that were delivered using the exact or phrase match type.
     * @var DeliveredMatchTypeReportFilter
     */
    public $DeliveredMatchType;

    /**
     * The report will include data for only the specified types of devices on which the ad is displayed. For example, you can use the filter to include data for only text ads displayed on smartphones.
     * @var DeviceTypeReportFilter
     */
    public $DeviceType;

    /**
     * The report will include data for only the specified Bing Ads websites where the ads are displayed. For example, you can use the filter to include data for only ads displayed on Bing.com (United States).
     * @var LanguageAndRegionReportFilter
     */
    public $LanguageAndRegion;

    /**
     * The report will include data for only the specified websites. The list can contain a maximum of 300 identifiers.
     * @var long[]
     */
    public $SiteIds;
}

/**
 * Defines a website performance report request that aggregates the performance data by publisher website for a specified time period. If you bid on website placements, you can include details in the report-such as clicks, conversions, and spend-that you can use to identify website placements that are performing well and those that you may want to exclude from your campaign.
 * @link http://msdn.microsoft.com/en-us/library/dd797220(v=msads.80).aspx SitePerformanceReportRequest Data Object
 */
final class SitePerformanceReportRequest extends ReportRequest
{
    /**
     * The type of aggregation to use to aggregate the report data. For example, you can aggregate the report data by day or month, or request a summary report. The Time element specifies the time period to use for the aggregation.
     * @var ReportAggregation
     */
    public $Aggregation;

    /**
     * The list of columns to include in the report. The report will include the columns in the order that you specify them.
     * @var SitePerformanceReportColumn[]
     */
    public $Columns;

    /**
     * The filter information to use to filter the report data.
     * @var SitePerformanceReportFilter
     */
    public $Filter;

    /**
     * The scope of the report. Use this element to limit the report to include data for a combination of accounts, ad groups, and campaigns.
     * @var AccountThroughAdGroupReportScope
     */
    public $Scope;

    /**
     * The time period to use for the report. You can specify a custom date range or select a predefined date range (for example, Today, ThisWeek, or LastMonth).
     * @var ReportTime
     */
    public $Time;
}

/**
 * Defines the criteria to use to filter the behavioral segment target report data.
 * @link http://msdn.microsoft.com/en-us/library/dd797013(v=msads.80).aspx BehavioralTargetReportFilter Data Object
 */
final class BehavioralTargetReportFilter
{
    /**
     * The report will include data for only the specified distribution medium. For example, you can use the filter to include data for only search ads.
     * @var AdDistributionReportFilter
     */
    public $AdDistribution;

    /**
     * The report will include data for only the specified behavioral segments. The list can contain a maximum of 300 identifiers.
     * @var long[]
     */
    public $BehavioralIds;

    /**
     * The report will include data for only the specified Bing Ads websites where the ads are displayed. For example, you can use the filter to include data for only ads displayed on Bing.com (United States).
     * @var LanguageAndRegionReportFilter
     */
    public $LanguageAndRegion;
}

/**
 * Defines a behavioral segment target report request.
 * @link http://msdn.microsoft.com/en-us/library/dd796935(v=msads.80).aspx BehavioralTargetReportRequest Data Object
 */
final class BehavioralTargetReportRequest extends ReportRequest
{
    /**
     * The type of aggregation to use for the report data. For example, you can aggregate the report data by day or month, or request a summary report. The Time element specifies the time period to use for the aggregation.
     * @var NonHourlyReportAggregation
     */
    public $Aggregation;

    /**
     * The list of columns to include in the report. The report will include the columns in the order that you specify them.
     * @var BehavioralTargetReportColumn[]
     */
    public $Columns;

    /**
     * The filter information to use to filter the report data.
     * @var BehavioralTargetReportFilter
     */
    public $Filter;

    /**
     * The scope of the report. Use this element to limit the report to include data for a combination of accounts, ad groups, and campaigns.
     * @var AccountThroughAdGroupReportScope
     */
    public $Scope;

    /**
     * The time period to use for the report. You can specify a custom data range or select a predefined date range (for example, Today, ThisWeek, or LastMonth).
     * @var ReportTime
     */
    public $Time;
}

/**
 * Defines the criteria to use to filter the conversion performance report data.
 * @link http://msdn.microsoft.com/en-us/library/gg262849(v=msads.80).aspx ConversionPerformanceReportFilter Data Object
 */
final class ConversionPerformanceReportFilter
{
    /**
     * The report will include data for only the specified types of devices on which the ad is displayed. For example, you can use the filter to include data only for text ads displayed on smartphones.
     * @var DeviceTypeReportFilter
     */
    public $DeviceType;

    /**
     * The report will include data for only the specified keywords. You can specify a maximum of 75 keywords. Each keyword can contain a maximum of 100 characters.
     * @var string[]
     */
    public $Keywords;
}

/**
 * Defines a conversion performance report request that aggregates the conversion performance data at the ad group, campaign, or account level for a specified time period. You can use this report to determine whether campaign performance meets goals for sales and revenue by using the conversion and revenue data, and the return-on-ad spend metric (ROAS) to measure the return on your investment.
 * @link http://msdn.microsoft.com/en-us/library/gg262843(v=msads.80).aspx ConversionPerformanceReportRequest Data Object
 */
final class ConversionPerformanceReportRequest extends ReportRequest
{
    /**
     * The type of aggregation to use to aggregate the report data. For example, you can aggregate the report data by day or month, or request a summary report. The Time element specifies the time period to use for the aggregation.
     * @var NonHourlyReportAggregation
     */
    public $Aggregation;

    /**
     * The list of columns to include in the report. The report includes the columns in the order that you specify them.
     * @var ConversionPerformanceReportColumn[]
     */
    public $Columns;

    /**
     * The filter information to use to filter the report data.
     * @var ConversionPerformanceReportFilter
     */
    public $Filter;

    /**
     * The scope of the report. For example, you can limit the report to include data for a combination of accounts, ad groups, and campaigns.
     * @var AccountThroughAdGroupReportScope
     */
    public $Scope;

    /**
     * The time period to use for the report. You can specify a custom date range or select a predefined date range (for example, Today, ThisWeek, or LastMonth).
     * @var ReportTime
     */
    public $Time;
}

/**
 * Defines the criteria to use to filter the goals and funnels report data.
 * @link http://msdn.microsoft.com/en-us/library/gg262854(v=msads.80).aspx GoalsAndFunnelsReportFilter Data Object
 */
final class GoalsAndFunnelsReportFilter
{
    /**
     * The report will include data for only the specified goals. The list can contain a maximum of 300 identifiers.
     * @var long[]
     */
    public $GoalIds;
}

/**
 * Defines a conversion funnel report request, which shows the number of times that users reach the different stages of a conversion funnel. You can use this report to get information about how users behave on your website, from the time they click an ad until they reach the conversion goal. For example, you can use this report to determine at what stage users leave the funnel, so you can improve that stage to increase the chance that the user will continue to the next stage.
 * @link http://msdn.microsoft.com/en-us/library/gg262840(v=msads.80).aspx GoalsAndFunnelsReportRequest Data Object
 */
final class GoalsAndFunnelsReportRequest extends ReportRequest
{
    /**
     * The type of aggregation to use to aggregate the report data. For example, you can aggregate the report data by day or month, or request a summary report. The Time element specifies the time period to use for the aggregation.
     * @var NonHourlyReportAggregation
     */
    public $Aggregation;

    /**
     * The list of columns to include in the report. The report will include the columns in the order that you specify them.
     * @var GoalsAndFunnelsReportColumn[]
     */
    public $Columns;

    /**
     * The filter information to use to filter the report data.
     * @var GoalsAndFunnelsReportFilter
     */
    public $Filter;

    /**
     * The scope of the report. For example, you can limit the report to include data for a combination of accounts, ad groups, and campaigns.
     * @var AccountThroughAdGroupReportScope
     */
    public $Scope;

    /**
     * The time period to use for the report. You can specify a custom date range or select a predefined date range (for example, Today, ThisWeek, or LastMonth).
     * @var ReportTime
     */
    public $Time;
}

/**
 * Defines the criteria to use to filter the traffic sources report data.
 * @link http://msdn.microsoft.com/en-us/library/gg262844(v=msads.80).aspx TrafficSourcesReportFilter Data Object
 */
final class TrafficSourcesReportFilter
{
    /**
     * The report will include data for only the specified goals. The list can contain a maximum of 300 identifiers.
     * @var long[]
     */
    public $GoalIds;
}

/**
 * Defines a traffic sources report request, which shows the number of times that users reach the different stages of a conversion funnel, broken out by publisher website. You can use this report to get information about which website generates the most revenue for each account.
 * @link http://msdn.microsoft.com/en-us/library/gg262853(v=msads.80).aspx TrafficSourcesReportRequest Data Object
 */
final class TrafficSourcesReportRequest extends ReportRequest
{
    /**
     * The type of aggregation to use to aggregate the report data. For example, you can aggregate the report data by day or month, or request a summary report. The Time element specifies the time period to use for the aggregation.
     * @var NonHourlyReportAggregation
     */
    public $Aggregation;

    /**
     * The list of columns to include in the report. The report will include the columns in the order that you specify them.
     * @var TrafficSourcesReportColumn[]
     */
    public $Columns;

    /**
     * The filter information to use to filter the report data.
     * @var TrafficSourcesReportFilter
     */
    public $Filter;

    /**
     * The scope of the report. For example, you can limit the report to include data for a combination of accounts, ad groups, and campaigns.
     * @var AccountReportScope
     */
    public $Scope;

    /**
     * The time period to use for the report. You can specify a custom date range or select a predefined date range (for example, Today, ThisWeek, or LastMonth).
     * @var ReportTime
     */
    public $Time;
}

/**
 * Defines a negative-keyword conflict report that identifies conflicts between your negative keywords and keywords.
 * @link http://msdn.microsoft.com/en-us/library/hh560534(v=msads.80).aspx NegativeKeywordConflictReportRequest Data Object
 */
final class NegativeKeywordConflictReportRequest extends ReportRequest
{
    /**
     * The list of columns to include in the report. The report will include the columns in the order that you specify them.
     * @var NegativeKeywordConflictReportColumn[]
     */
    public $Columns;

    /**
     * The scope of the report. Use this element to limit the report to include data for a combination of accounts, ad groups, and campaigns.
     * @var AccountThroughAdGroupReportScope
     */
    public $Scope;
}

/**
 * Defines a report that shows you a list of your keyword objects that were included in the keyword migration process.
 * @link http://msdn.microsoft.com/en-us/library/hh969232(v=msads.80).aspx KeywordMigrationReportRequest Data Object
 */
final class KeywordMigrationReportRequest extends ReportRequest
{
    /**
     * The list of columns to include in the report. The report will include the columns in the order that you specify them.
     * @var KeywordMigrationReportColumn[]
     */
    public $Columns;

    /**
     * The scope of the report. Use this element to limit the report to include data for a combination of accounts and campaigns.
     * @var AccountThroughCampaignReportScope
     */
    public $Scope;
}

/**
 * Defines the criteria to use to filter the campaign change history report data.
 * @link http://msdn.microsoft.com/en-us/library/hh912356(v=msads.80).aspx SearchCampaignChangeHistoryReportFilter Data Object
 */
final class SearchCampaignChangeHistoryReportFilter
{
    /**
     * The report will include data for only the specified type of change. For example, you can use the filter to include data only for updates or deletions.
     * @var ChangeTypeReportFilter
     */
    public $HowChanged;

    /**
     * The report will include data for only the specified type of entity. For example, you can use the filter to include data only for changes to ad groups or campaigns.
     * @var ChangeEntityReportFilter
     */
    public $ItemChanged;
}

/**
 * Defines a change history report request that identifies entities that have been added or deleted. In addition, the report shows the new and old values of entities whose values have been updated.
 * @link http://msdn.microsoft.com/en-us/library/hh912357(v=msads.80).aspx SearchCampaignChangeHistoryReportRequest Data Object
 */
final class SearchCampaignChangeHistoryReportRequest extends ReportRequest
{
    /**
     * The list of columns to include in the report. The report will include the columns in the order that you specify them.
     * @var SearchCampaignChangeHistoryReportColumn[]
     */
    public $Columns;

    /**
     * The filter information to use to filter the report data.
     * @var SearchCampaignChangeHistoryReportFilter
     */
    public $Filter;

    /**
     * The scope of the report. Use this element to limit the report to include data for a combination of accounts, ad groups, and campaigns.
     * @var AccountThroughAdGroupReportScope
     */
    public $Scope;

    /**
     * The time period to use for the report. You can specify a custom date range or select one of the following predefined date ranges.
     * @var ReportTime
     */
    public $Time;
}

/**
 * Defines an ad extension report request that aggregates ad extension performance data by ad for a specified time period. By including performance details in the report, such as clicks, conversion, and spend, you can identify ad extensions that are performing well, and those that may need to be adjusted to optimize the monthly budget.
 * @link http://msdn.microsoft.com/en-us/library/jj713606(v=msads.80).aspx AdExtensionByAdsReportRequest Data Object
 */
final class AdExtensionByAdsReportRequest extends ReportRequest
{
    /**
     * The type of aggregation to use for the report data. For example, you can aggregate the report data by day or month, or request a summary report. The Time element specifies the time period to use for the aggregation.
     * @var ReportAggregation
     */
    public $Aggregation;

    /**
     * The list of columns to include in the report. The report will include the columns in the order that you specify them.
     * @var AdExtensionByAdsReportColumn[]
     */
    public $Columns;

    /**
     * The scope of the report. Use this element to limit the report to include data for a combination of accounts, ad groups, and campaigns.
     * @var AccountThroughCampaignReportScope
     */
    public $Scope;

    /**
     * The time period to use for the report. You can specify a custom date range or select a predefined date range (for example, Today, ThisWeek, or LastMonth).
     * @var ReportTime
     */
    public $Time;
}

/**
 * Defines an ad extension report request that aggregates ad extension performance data by keyword for a specified time period. By including performance details in the report, such as clicks, conversion, and spend, you can identify ad extensions that are performing well, and those that may need to be adjusted to optimize the monthly budget.
 * @link http://msdn.microsoft.com/en-us/library/jj713605(v=msads.80).aspx AdExtensionByKeywordReportRequest Data Object
 */
final class AdExtensionByKeywordReportRequest extends ReportRequest
{
    /**
     * The type of aggregation to use for the report data. For example, you can aggregate the report data by day or month, or request a summary report. The Time element specifies the time period to use for the aggregation.
     * @var ReportAggregation
     */
    public $Aggregation;

    /**
     * The list of columns to include in the report. The report will include the columns in the order that you specify them.
     * @var AdExtensionByKeywordReportColumn[]
     */
    public $Columns;

    /**
     * The scope of the report. Use this element to limit the report to include data for a combination of accounts, ad groups, and campaigns.
     * @var AccountThroughCampaignReportScope
     */
    public $Scope;

    /**
     * The time period to use for the report. You can specify a custom date range or select a predefined date range (for example, Today, ThisWeek, or LastMonth).
     * @var ReportTime
     */
    public $Time;
}

/**
 * Defines an ad extension report request that lists all versions of an ad extension by account. You can use this information along with the performance data from the AdExtensionByAdsReportRequest and AdExtensionByKeywordReportRequest reports to determine which version performed better.
 * @link http://msdn.microsoft.com/en-us/library/jj713607(v=msads.80).aspx AdExtensionDimensionReportRequest Data Object
 */
final class AdExtensionDimensionReportRequest extends ReportRequest
{
    /**
     * The list of columns to include in the report. The report will include the columns in the order that you specify them.
     * @var AdExtensionDimensionReportColumn[]
     */
    public $Columns;

    /**
     * The scope of the report. Use this element to limit the report to include data for one or more accounts.
     * @var AccountReportScope
     */
    public $Scope;
}

/**
 * Defines the criteria to use to filter the share of voice report data.
 * @link http://msdn.microsoft.com/en-us/library/jj592908(v=msads.80).aspx ShareOfVoiceReportFilter Data Object
 */
final class ShareOfVoiceReportFilter
{
    /**
     * The report will include data for only the specified distribution medium. For example, you can use the filter to include data for only search ads.
     * @var AdDistributionReportFilter
     */
    public $AdDistribution;

    /**
     * The report will include data for only the specified bid match types (as opposed to the delivered match type).For example, you can use the filter to include data for ads that were bid on using the exact or phrase match type.
     * @var BidMatchTypeReportFilter
     */
    public $BidMatchType;

    /**
     * The report will include data for only the specified delivered match types (as opposed to the bid match type).For example, you can use the filter to include data for ads that were delivered using the exact or phrase match type.
     * @var DeliveredMatchTypeReportFilter
     */
    public $DeliveredMatchType;

    /**
     * The report will include data for only the specified keywords. You can specify a maximum of 75 keywords. Each keyword can contain a maximum of 100 characters.
     * @var string[]
     */
    public $Keywords;

    /**
     * Do not use this filter; it is for backwards compatibility only. Instead, use the LanguageCode filter.
     * @var LanguageAndRegionReportFilter
     */
    public $LanguageAndRegion;

    /**
     * The report will include data for only websites that used the specified languages. For a list of possible values, see LanguageCode Values.
     * @var string[]
     */
    public $LanguageCode;
}

/**
 * Defines a report request that aggregates share of voice (SOV) data by keyword and match type for the specified time period. You can include details in the report (such as clicks, conversion, and spend) that you can use to identify keywords that are performing well, and those that are not.
 * @link http://msdn.microsoft.com/en-us/library/jj592909(v=msads.80).aspx ShareOfVoiceReportRequest Data Object
 */
final class ShareOfVoiceReportRequest extends ReportRequest
{
    /**
     * The type of aggregation to use to aggregate the report data. For example, you can aggregate the report data by day or month, or request a summary report. The default is Summary.
     * @var NonHourlyReportAggregation
     */
    public $Aggregation;

    /**
     * The list of columns to include in the report. The report will include the columns in the order that you specify them.
     * @var ShareOfVoiceReportColumn[]
     */
    public $Columns;

    /**
     * The filter information to use to filter the report data.
     * @var ShareOfVoiceReportFilter
     */
    public $Filter;

    /**
     * The scope of the report. Use this element to limit the report to include data for a combination of accounts, ad groups, and campaigns.
     * @var AccountThroughAdGroupReportScope
     */
    public $Scope;

    /**
     * The time period to use for the report. You can specify a custom date range or select a predefined date range (for example, Today, ThisWeek, or LastMonth).
     * @var ReportTime
     */
    public $Time;
}

/**
 * Defines the criteria to use to filter the product target performance report data.
 * @link http://msdn.microsoft.com/en-us/library/dn195847(v=msads.80).aspx ProductTargetPerformanceReportFilter Data Object
 */
final class ProductTargetPerformanceReportFilter
{
    /**
     * The report will include data for only the specified types of devices on which the ad is displayed. For example, you can use the filter to include data for only text ads displayed on smartphones.
     * @var DeviceTypeReportFilter
     */
    public $DeviceType;

    /**
     * The report will include data for only websites that used the specified languages. For a list of possible values, see LanguageCode Values.
     * @var string[]
     */
    public $LanguageCode;
}

/**
 * Defines a product target performance report request that aggregates the performance data by product target for a specified time period. You can include details in the report such as clicks, conversion, and spend that you can use to identify product targets that are performing well, and those that are not.
 * @link http://msdn.microsoft.com/en-us/library/dn195846(v=msads.80).aspx ProductTargetPerformanceReportRequest Data Object
 */
final class ProductTargetPerformanceReportRequest extends ReportRequest
{
    /**
     * The type of aggregation to use to aggregate the report data. For example, you can aggregate the report data by day or month, or request a summary report. The default is Summary.
     * @var ReportAggregation
     */
    public $Aggregation;

    /**
     * The list of columns to include in the report. The report will include the columns in the order that you specify them.
     * @var ProductTargetPerformanceReportColumn[]
     */
    public $Columns;

    /**
     * The filter information to use to filter the report data.
     * @var ProductTargetPerformanceReportFilter
     */
    public $Filter;

    /**
     * The scope of the report. Use this element to limit the report to include data for a combination of accounts, ad groups, and campaigns.
     * @var AccountThroughAdGroupReportScope
     */
    public $Scope;

    /**
     * The time period to use for the report. You can specify a custom date range or select a predefined date range (for example, Today, ThisWeek, or LastMonth).
     * @var ReportTime
     */
    public $Time;
}

/**
 * Defines the base object from which all fault detail objects derive.
 * @link http://msdn.microsoft.com/en-us/library/dn169139(v=msads.80).aspx ApplicationFault Data Object
 */
class ApplicationFault
{
    /**
     * The identifier of the log entry that contains the details of the API call.
     * @var string
     */
    public $TrackingId;
}

/**
 * Submits a report request.
 * @link http://msdn.microsoft.com/en-us/library/jj879321(v=msads.80).aspx SubmitGenerateReportRequest Request Object
 */
final class SubmitGenerateReportRequest
{
    /**
     * The report request. The request must be an object that derives from ReportRequest. For a list of report request types, see Report Types.
     * @var ReportRequest
     */
    public $ReportRequest;
}

/**
 * Response object for the SubmitGenerateReport service operation.
 * @link http://msdn.microsoft.com/en-us/library/jj879321(v=msads.80).aspx SubmitGenerateReportResponse Response Object
 */
final class SubmitGenerateReportResponse
{
    /**
     * The identifier of the report request. Use this identifier when calling the PollGenerateReport operation to determine the status of the report request. Once returned, the identifier is valid for five days.
     * @var string
     */
    public $ReportRequestId;
}

/**
 * Gets the status of a report request.
 * @link http://msdn.microsoft.com/en-us/library/jj879320(v=msads.80).aspx PollGenerateReportRequest Request Object
 */
final class PollGenerateReportRequest
{
    /**
     * The identifier of the report request. The SubmitGenerateReport operation returns the identifier.
     * @var string
     */
    public $ReportRequestId;
}

/**
 * Response object for the PollGenerateReport service operation.
 * @link http://msdn.microsoft.com/en-us/library/jj879320(v=msads.80).aspx PollGenerateReportResponse Response Object
 */
final class PollGenerateReportResponse
{
    /**
     * The ReportRequestStatus object that contains the status of the report request and the download URL.
     * @var ReportRequestStatus
     */
    public $ReportRequestStatus;
}


?>
