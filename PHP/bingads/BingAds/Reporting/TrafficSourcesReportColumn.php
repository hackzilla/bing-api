<?php

namespace BingAds\Reporting;

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
