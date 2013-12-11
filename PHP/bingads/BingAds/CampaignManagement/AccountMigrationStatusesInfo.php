<?php

namespace BingAds\CampaignManagement;

/**
 * Defines an object that identifies the account being migrated, as well as the status of the migration process.
 * @link http://msdn.microsoft.com/en-us/library/hh965511(v=msads.80).aspx AccountMigrationStatusesInfo Data Object
 */
final class AccountMigrationStatusesInfo
{
    /**
     * The identifier of the account being migrated.
     * @var long
     */
    public $AccountId;

    /**
     * An array of MigrationStatusInfo objects. The array contains a status object for each migration type specified in the GetAccountMigrationStatusesRequest request. Each status object identifies the migration type, the time that the migration process began, and the status of the migration.
     * @var MigrationStatusInfo[]
     */
    public $MigrationStatusInfo;
}
