<?php

namespace BingAds\Reporting;

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
