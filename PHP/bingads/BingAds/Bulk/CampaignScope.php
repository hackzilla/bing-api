<?php

namespace BingAds\Bulk;

/**
 * Defines an object that identifies a campaign to download.
 * @link http://msdn.microsoft.com/en-us/library/jj134990(v=msads.80).aspx CampaignScope Data Object
 */
final class CampaignScope
{
    /**
     * The identifier of the campaign to download.
     * @var long
     */
    public $CampaignId;

    /**
     * The identifier of the account that owns the campaign to download.
     * @var long
     */
    public $ParentAccountId;
}
