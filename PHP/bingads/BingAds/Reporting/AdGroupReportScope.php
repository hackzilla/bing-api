<?php

namespace BingAds\Reporting;

/**
 * Defines an ad group to include in the report.
 * @link http://msdn.microsoft.com/en-us/library/bb671622(v=msads.90).aspx AdGroupReportScope Data Object
 */
final class AdGroupReportScope
{
    /**
     * The identifier of the account that the ad group belongs to.
     * @var long
     */
    public $AccountId;

    /**
     * The identifier of the campaign that the ad group belongs to.
     * @var long
     */
    public $CampaignId;

    /**
     * The identifier of the ad group to limit the scope to.
     * @var long
     */
    public $AdGroupId;
}
