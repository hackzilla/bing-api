<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the possible status values of a campaign.
 * @link http://msdn.microsoft.com/en-us/library/bb672025(v=msads.90).aspx CampaignStatus Value Set
 */
final class CampaignStatus
{
    /** The campaign is active, which indicates that the campaign's ads can be served. */
    const Active = 'Active';

    /** The campaign is paused, which indicates that the campaign's ads will not serve. */
    const Paused = 'Paused';

    /** The campaign is paused, which indicates that the campaign's ads will not serve. The service sets this status when the budget is depleted. The service will set the status back to Active when the budget is restored. */
    const BudgetPaused = 'BudgetPaused';

    /** The campaign is paused, which indicates that the campaign's ads will not serve. This status results when a user sets the campaign status to paused after the service pauses the campaign because the budget is depleted. */
    const BudgetAndManualPaused = 'BudgetAndManualPaused';

    /** The campaign is deleted. This status is for internal use only. Because all Get operations do not return deleted objects, you will not see an object with this status. */
    const Deleted = 'Deleted';
}
