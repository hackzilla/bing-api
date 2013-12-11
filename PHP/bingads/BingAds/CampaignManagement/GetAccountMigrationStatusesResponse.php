<?php

namespace BingAds\CampaignManagement;

/**
 * Response object for the GetAccountMigrationStatuses service operation.
 * @link http://msdn.microsoft.com/en-us/library/hh965529(v=MSADS.80).aspx GetAccountMigrationStatusesResponse Response Object
 */
final class GetAccountMigrationStatusesResponse
{
    /**
     * An array of AccountMigrationStatusesInfo objects. Each object identifies the account and the status of each specified migration type.
     * @var AccountMigrationStatusesInfo[]
     */
    public $MigrationStatuses;
}
