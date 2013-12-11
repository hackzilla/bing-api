<?php

namespace BingAds\Optimizer;

/**
 * Gets a list of keyword suggestions that are relevant to the specified ad group. The keyword suggestion also includes a suggested bid value.
 * @link http://msdn.microsoft.com/en-us/library/dn376336(v=msads.90).aspx GetKeywordOpportunitiesRequest Request Object
 */
final class GetKeywordOpportunitiesRequest
{
    /**
     * The identifier of the account that owns the specified campaign.
     * @var long
     */
    public $AccountId;

    /**
     * The identifier of the ad group to get keyword suggestions for.
     * @var long
     */
    public $AdGroupId;

    /**
     * The identifier of the campaign that owns the specified ad group.
     * @var long
     */
    public $CampaignId;
}
