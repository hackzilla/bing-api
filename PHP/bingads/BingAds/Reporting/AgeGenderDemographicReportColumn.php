<?php

namespace BingAds\Reporting;

/**
 * Defines the data columns that you can include in an age and gender demographic report.
 * @link http://msdn.microsoft.com/en-us/library/bb671786(v=msads.90).aspx AgeGenderDemographicReportColumn Value Set
 */
final class AgeGenderDemographicReportColumn
{
    /** The report will include a column that contains the account name. */
    const AccountName = 'AccountName';

    /** The report will include a column that contains the account number. */
    const AccountNumber = 'AccountNumber';

    /** The report will include a column that contains the time period of each report row. */
    const TimePeriod = 'TimePeriod';

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
