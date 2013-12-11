<?php

namespace BingAds\Reporting;

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
