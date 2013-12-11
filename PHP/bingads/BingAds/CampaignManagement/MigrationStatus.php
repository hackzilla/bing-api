<?php

namespace BingAds\CampaignManagement;

/**
 * Defines the possible status values of the migration process.
 * @link http://msdn.microsoft.com/en-us/library/hh965510(v=msads.80).aspx MigrationStatus Value Set
 */
final class MigrationStatus
{
    /** The account's data is not being migrated because the customer is not a member of the pilot program associated with the specified migration type. */
    const NotInPilot = 'NotInPilot';

    /** The migration has not started. */
    const NotStarted = 'NotStarted';

    /** The migration process is running. */
    const InProgress = 'InProgress';

    /** The migration process is complete. */
    const Completed = 'Completed';
}
