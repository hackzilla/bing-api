<?php

namespace BingAds\CampaignManagement;

/**
 * Gets the status of one or more data migration processes being run for the specified accounts.
 * @link http://msdn.microsoft.com/en-us/library/hh965529(v=MSADS.80).aspx GetAccountMigrationStatusesRequest Request Object
 */
final class GetAccountMigrationStatusesRequest
{
    /**
     * An array of identifiers of the accounts being migrated. You can specify a maximum of 1,000 account identifiers.
     * @var long[]
     */
    public $AccountIds;

    /**
     * The type of migration for which you want to get status.
     * @var string
     */
    public $MigrationType;
}
