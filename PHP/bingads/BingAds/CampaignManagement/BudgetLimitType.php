<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the possible budget types that you can specify for a campaign.
 * @link http://msdn.microsoft.com/en-us/library/bb672035(v=msads.90).aspx BudgetLimitType Value Set
 */
final class BudgetLimitType
{
    /** A monthly budget that is spent until it is depleted. Depending on the activity, the complete budget could be spent in a couple of days, weeks, or not at all. */
    const MonthlyBudgetSpendUntilDepleted = 'MonthlyBudgetSpendUntilDepleted';

    /** A daily budget that is spent until it is depleted. Depending on the activity, the complete budget could be spent within a couple of minutes, hours, or not at all. */
    const DailyBudgetAccelerated = 'DailyBudgetAccelerated';

    /** A daily budget that is spread throughout the day. */
    const DailyBudgetStandard = 'DailyBudgetStandard';
}
