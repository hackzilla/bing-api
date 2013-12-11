<?php

namespace BingAds\Reporting;

/**
 * Defines the data columns that you can include in a search query performance report.
 * @link http://msdn.microsoft.com/en-us/library/ee703958(v=msads.90).aspx SearchQueryPerformanceReportColumn Value Set
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
    const DeliveredMatchType = 'DeliveredMatchType';

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
