<?php

namespace BingAds\Reporting;

/**
 * Defines the set of accounts and campaigns to include in the report.
 * @link http://msdn.microsoft.com/en-us/library/bb671549(v=msads.90).aspx AccountThroughCampaignReportScope Data Object
 */
final class AccountThroughCampaignReportScope
{
    /**
     * An array of account identifiers that identifies the account data to include in the report. You can specify a maximum of 1,000 account identifiers.
     * @var long[]
     */
    public $AccountIds;

    /**
     * An array of CampaignReportScope objects that identifies the campaign data to include in the report. You can specify a maximum of 300 campaign identifiers.
     * @var CampaignReportScope[]
     */
    public $Campaigns;
}
