<?php

namespace BingAds\Reporting;

/**
 * Defines a campaign to include in the report.
 * @link http://msdn.microsoft.com/en-us/library/bb671721(v=msads.90).aspx CampaignReportScope Data Object
 */
final class CampaignReportScope
{
    /**
     * The identifier of the account that the campaign belongs to.
     * @var long
     */
    public $AccountId;

    /**
     * The identifier of the campaign to limit the scope to.
     * @var long
     */
    public $CampaignId;
}
