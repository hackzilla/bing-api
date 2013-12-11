<?php

namespace BingAds\CampaignManagement;

/**
 * Defines an object that contains information about the progress of the migration process.
 * @link http://msdn.microsoft.com/en-us/library/hh965512(v=msads.80).aspx MigrationStatusInfo Data Object
 */
final class MigrationStatusInfo
{
    /**
     * The type of migration.
     * @var string
     */
    public $MigrationType;

    /**
     * The date and time, in Coordinated Universal Time (UTC), when the migration started.
     * @var dateTime
     */
    public $StartTimeInUtc;

    /**
     * The status of the migration process. For possible values, see MigrationStatus.
     * @var MigrationStatus
     */
    public $Status;
}
