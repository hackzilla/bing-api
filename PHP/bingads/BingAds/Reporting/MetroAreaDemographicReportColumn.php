<?php

namespace BingAds\Reporting;

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
