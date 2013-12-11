<?php

namespace BingAds\Reporting;

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
