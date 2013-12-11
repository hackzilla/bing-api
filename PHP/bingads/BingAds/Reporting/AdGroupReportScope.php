<?php

namespace BingAds\Reporting;

/**
 * Defines an ad group to include in the report.
 * @link http://msdn.microsoft.com/en-us/library/bb671622(v=msads.80).aspx AdGroupReportScope Data Object
 */
final class AdGroupReportScope
{
    /**
     * The identifier of the account that the ad group belongs to.
     * @var long
     */
    public $ParentAccountId;

    /**
     * The identifier of the campaign that the ad group belongs to.
     * @var long
     */
    public $ParentCampaignId;

    /**
     * The identifier of the ad group to limit the scope to.
     * @var long
     */
    public $AdGroupId;
}
