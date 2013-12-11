<?php

namespace BingAds\Reporting;

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
