<?php

namespace BingAds\Reporting;

/**
 * Defines the set of accounts, campaigns, and ad groups to include in the report.
 * @link http://msdn.microsoft.com/en-us/library/bb671547(v=msads.90).aspx AccountThroughAdGroupReportScope Data Object
 */
final class AccountThroughAdGroupReportScope
{
    /**
     * An array of account identifiers that identifies the account data to include in the report. You can specify a maximum of 1,000 account identifiers.
     * @var long[]
     */
    public $AccountIds;

    /**
     * An array of AdGroupReportScope objects that identifies the ad group data to include in the report. You can specify a maximum of 300 ad group identifiers.
     * @var AdGroupReportScope[]
     */
    public $AdGroups;

    /**
     * An array of CampaignReportScope objects that identifies the campaign data to include in the report. You can specify a maximum of 300 campaign identifiers.
     * @var CampaignReportScope[]
     */
    public $Campaigns;
}
