<?php

namespace BingAds\Reporting;

/**
 * Defines the data columns that you can include in an ad extension by keyword report.
 * @link http://msdn.microsoft.com/en-us/library/jj713610(v=msads.90).aspx AdExtensionByKeywordReportColumn Value Set
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
